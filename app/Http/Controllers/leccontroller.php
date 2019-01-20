<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//for ajax error returns
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

//model
use App\upload;
use App\cosc;

//storage library
use Illuminate\Support\Facades\Storage;

class leccontroller extends Controller
{


    public function upload(){

         //course list rec
      $cosc = cosc::select('cos')->get();

        return view('lecturer.upload')->with('cosc',$cosc);
    }




    protected $uploadrules =
    [
        'Title'=>'required|string|max:30',
        'File'=>'required|file',
        'Course'=>'required|string|max:10',
        'Level'=>'required|string|max:5',
        'Description'=> 'required|string|max:255',
        'Life_Time'=>'required|integer',
    ];
    public function uploadfile(Request $request){

        $validator = Validator::make(Input::all(), $this->uploadrules);

        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {

            try{

            $title = $request->input('Title');
             $cos = $request->input('Course');
            $lev = $request->input('Level');
            $des = $request->input('Description');
            $lifetime = $request->input('Life_Time');

            //certify the course matches the level
           if(substr($cos,0,1) != substr($lev,0,1)){
            return 'Error: The Course And Level Don\'t Match';
           }

  //handle file uploads   #1

       //................................//

       if($request->hasfile('File')){
        //get filename with extension
        $filenamewithextension = $request->file('File')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
      $extension = $request->file('File')->getClientOriginalExtension();

        //allowed formats
        $ex = array('exe','rar','jpeg','png','jif','txt','mp4','avi','pdf','ppt','docx','doc','jpg','html');
        if(!in_array($extension,$ex)){
            return 'The File Format ('.$extension.') Is Not Allowed';
        }

        //filename to store
        $file = $filename.'_'.time().'.'.$extension;

         $size =   $request->file('File')->storeAs('public/files', $file);
           
    }else{
        $file = 'nofile.jpg';
    }

    //................................//

    //file size

if(Storage::exists($size)){
    $SizeInBytes = Storage::size($size);

    $kb =1024;
    $mb = $kb *1024;
    $gb = $mb *1024;

    if($SizeInBytes >= 0 && $SizeInBytes < $kb){
        $newsize = $SizeInBytes.' B';
        $filesize = 1;
    }elseif($SizeInBytes >= $kb && $SizeInBytes < $mb){
        $newsize = ceil($SizeInBytes/$kb).' KB';
        $filesize = 1;
    }elseif($SizeInBytes >= $mb && $SizeInBytes < $gb){
        $newsize = ceil($SizeInBytes/$mb).' MB';
        $filesize = ceil($SizeInBytes/$mb);
    }else{
        $newsize = $SizeInBytes.' B';
        $filesize = 1;
    }

     }else{
        $newsize  = 'Unknown';
    }
    //file size
    if($filesize >= 20){

          //delete file from storage
    Storage::delete('public/files/'.$file);

        return 'File Can\'t be Larger Than 20MB';
    }


    //compute ExpirationDate
    if($lifetime == 0){
        //30 mins
        $ExpirationDate = \carbon\carbon::now()->addMinutes(30);
    }elseif($lifetime == 1){
        //1 hr
        $ExpirationDate = \carbon\carbon::now()->addHours(1);
    }elseif($lifetime == 2){
        //1 day
        $ExpirationDate = \carbon\carbon::now()->addDays(1);
    }elseif($lifetime == 3){
        //3 days
        $ExpirationDate = \carbon\carbon::now()->addDays(3);
    }elseif($lifetime == 4){
        //1 wk
        $ExpirationDate = \carbon\carbon::now()->addWeeks(1);
    }elseif($lifetime == 5){
        //1 month
        $ExpirationDate = \carbon\carbon::now()->addMonths(1);
    }elseif($lifetime == 6){
        //4 months
        $ExpirationDate = \carbon\carbon::now()->addMonths(4);
    }elseif($lifetime == 7){
        //1 yr
        $ExpirationDate = \carbon\carbon::now()->addYears(1);
    }else{
        //forever
        $ExpirationDate = \carbon\carbon::now()->addYears(101);
    }

    $up = new upload();

    $fname = Auth()->user()->fname.' '.Auth()->user()->lname;
    $up->user_id = Auth()->user()->id;
    $up->fname=$fname;
    $up->title=$title;
    $up->file=$file;
    $up->size=$newsize;
    $up->course=$cos;
    $up->level=$lev;
    $up->description=$des;
    $up->expire=$ExpirationDate;

    $up->save();

        return 'File Upload Successful!';
        } //try end

    catch(\Exception $e){
            return response()->json('An Error Occured! Please Refresh Page and Try Again.');
        } //catch end

        }//validator if end

    } //meth end
    



    public function lec_search(Request $request){

        $word = $request->input('Search');
      $result = upload::where('user_id','=',Auth()->user()->id)->where('title','Like','%'.$word.'%')
      ->orwhere('description','Like','%'.$word.'%')
      ->select('title','file','course','level','created_at')
       ->paginate(4)->appends('Search', request('Search'));;

       return view('lecturer.search')->with('result',$result);

    }


public function delete_file(Request $request){

    $id = $request->input('id');

    $del=upload::findorfail($id);

    //delete file from storage
    Storage::delete('public/files/'.$del->file);

     //delete file rec from database
     $del->delete();

     return response()->json('File Deleted Successfully!');
    
}

} //class end
