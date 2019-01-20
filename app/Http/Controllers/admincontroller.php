<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//model
use App\upload;
use App\user;
use App\newmodel;
use App\course;
use App\cosc;

//for ajax error returns
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class admincontroller extends Controller
{
    

public function activate(){

    return view('admin.task');
}


public function users(){

    return view('admin.users');
}


public function app(Request $request){

   $id = $request->input('id');

   $user = User::findorfail($id);

//increment activation
$user->increment('active');

    return 'Staff Approved Successfully!';
}



public function dec(Request $request){

    $id = $request->input('id');
 
    $user = User::findorfail($id);

 //increment activation
 $user->increment('active',2);
 
     return 'Staff Declined Successfully!';
 }




 public function del(Request $request){

    $id = $request->input('id');
 
    $user = User::findorfail($id);

    if ($user->identity == 1){

        //delete staff upload recs
        //id to delete
       $file_id = upload::where('user_id','=',$id)->pluck('id')->all();
        //delete
      $erase = upload::destroy($file_id);
      
  //delete user
    $user->delete();

return 'User Deleted Successfully!';

    }elseif($user->identity == 2){
//restore course rec back to null
$course_user_id = course::where('user_id','=',$id)->pluck('id')->first();
$course_rec = course::findorfail($course_user_id);

$course_rec->course1= NULL;
$course_rec->course2= NULL;
$course_rec->course3= NULL;
$course_rec->course4= NULL;
$course_rec->course5= NULL;
$course_rec->course6= NULL;
$course_rec->course7= NULL;
$course_rec->course8= NULL;
$course_rec->course9= NULL;
$course_rec->course10= NULL;

$course_rec->save();

//delete user
$user->delete();

return 'User Deleted Successfully!';
    }

    
 }



 public function news(){

    return view('admin.news');
 }



 protected $nes =
    [
        'Title'=>'required|string|max:30',
        'News'=> 'required|string|max:255',
        
    ];

 public function news_update(Request $request){

    $validator = Validator::make(Input::all(), $this->nes);

    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {

         $title = $request->input('Title');
        $news = $request->input('News');

        $up = new newmodel();

        $up->title=$title;
        $up->news=$news;
    
        $up->save();
    
            return 'News Updated Successful!';

    }//val end
 }


 //page
 public function add_course(){

    return view('admin.course');

     }

     
   

     //save course code
     protected $code =
     [
         'cos'=>'required|numeric|unique:coscs',
         
     ];
 public function save_course(Request $request){
    $validator = Validator::make(Input::all(), $this->code);

    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {

     $code = $request->input('cos');

     $save = new cosc;

     $save->cos=$code;

     $save->save();

     return 'Course Code Saved!';
    }//val if end

     }
   //save course code



    //edit coures
    protected $cos =
    [
        'cos'=>'required|numeric|unique:coscs',
        
    ];
 public function edit_course(Request $request){
    $validator = Validator::make(Input::all(), $this->code);

    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {
    $id = $request->input('id');
    $cos = $request->input('cos');

    $rec = cosc::findorfail($id);

    $rec->cos= $cos;

    $rec->save();

    return 'Course Code Changed!';
    }//val

     }


//del
public function delete_course(Request $request){
   
    $id = $request->input('id');

    $rec = cosc::findorfail($id);

    $rec->delete();

    return 'Course Code Deleted!';
  
     }



     


//ajax load
     public function load_staff(){
        //lec
     $lec = user::where('identity','=',1)->where('active','=',0)
     ->select('id','fname','lname','staffid','email','Number','created_at')->paginate(5);
       return view('admin.ajax.activate')->with('lec',$lec);
   
        }


        //ajax load 
     public function load_users(){
        //load users
       
     $users = user::where('identity','!=',0)->where('active','=',1)
     ->select('id','fname','lname','identity','Number','staffid','email','created_at')->paginate(5);
       return view('admin.ajax.users')->with('users',$users);
   
        }


          //ajax load
     public function load_course(){

        $cos = cosc::orderby('id','desc')->select('id','cos','updated_at')->paginate(5);
       return view('admin.ajax.course')->with('cos',$cos);
   
        }
        
           //ajax load 
     public function load_news(){
        //load news
     $news = newmodel::orderby('id','desc')->select('id','title','news','updated_at')->take(1)->get();

       return view('admin.ajax.news')->with('news',$news);
   
        }




//Edit news
        protected $newsedit =
        [
            'Title'=>'required|string|max:30',
            'News'=> 'required|string|max:255',
            
        ];
        public function edit_news(Request $request){
            $validator = Validator::make(Input::all(), $this->newsedit);

            if ($validator->fails()) {
                return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
            } else {
               $id = $request->input('id');
            $t = $request->input('Title');
          $n =  $request->input('News');

          $news = newmodel::findorfail($id);

          $news->title = $t;
          $news->news = $n;

          $news->save();

          return 'News Edited!';
            }//if val end
            }

}//class end
