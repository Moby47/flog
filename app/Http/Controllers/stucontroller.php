<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\course;
use App\cosc;
use App\upload;
use App\user;

//for ajax error returns
use Validator;
use Response;
use Illuminate\Support\Facades\Input;



class stucontroller extends Controller
{
    
    //download page
    public function dd(){

    $user_id =Auth()->user()->id;

    //my courses
    $cos = course::all()->where('user_id','=',$user_id)->first();

       $result = upload::orderby('id','desc')
        ->wherein('course',$cos)
        ->select('id','fname','title','file','size','course','level','expire','description','created_at')->paginate(6);

        return view('student.download')->with('result',$result);
     }
    

    //courses page
     public function cos(){
    
      
          //user courses 
       $cos = course::where('user_id','=',Auth()->user()->id)->get()->first();

       //course list rec
      $cosc = cosc::select('cos')->get();

       return view('student.course')->with('cos',$cos)->with('cosc',$cosc);

       
     }//meth end


     protected $cos =
     [
         'Course1'=>'max:30',
         'Course2'=>'max:30',
         'Course3'=>'max:30',
         'Course4'=>'max:30',
         'Course5'=>'max:30',
         'Course6'=>'max:30',
         'Course7'=>'max:30',
         'Course8'=>'max:30',
         'Course9'=>'max:30',
         'Course10'=>'max:30',
     ];



     
     //course update submit form
     public function course(Request $request){
   
        $user = Auth()->user()->id;
    
    //update the already existing rec
    $cos1 = $request->input('Course1');
    $cos2 = $request->input('Course2');
    $cos3 = $request->input('Course3');
    $cos4 = $request->input('Course4');
    $cos5 = $request->input('Course5');
    $cos6 = $request->input('Course6');
    $cos7 = $request->input('Course7');
    $cos8 = $request->input('Course8');
    $cos9 = $request->input('Course9');
    $cos10 = $request->input('Course10');


//check for duplicate selections Cos1///////////////////////////////////////////////     1    //////////////
$coll1 = array($cos2,$cos3,$cos4,$cos5,$cos6,$cos7,$cos8,$cos9,$cos10);
if(in_array($cos1,$coll1)){
    //potential error start
if($cos1 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos1///////////////////////////////////////////////     1    //////////////

//check for duplicate selections Cos2///////////////////////////////////////////////     2    //////////////
$coll2 = array($cos1,$cos3,$cos4,$cos5,$cos6,$cos7,$cos8,$cos9,$cos10);
if(in_array($cos2,$coll2)){
    //potential error start
if($cos2 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos2///////////////////////////////////////////////     2    //////////////

//check for duplicate selections Cos3///////////////////////////////////////////////     3    //////////////
$coll3 = array($cos2,$cos1,$cos4,$cos5,$cos6,$cos7,$cos8,$cos9,$cos10);
if(in_array($cos3,$coll3)){
    //potential error start
if($cos3 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos3///////////////////////////////////////////////     3    //////////////

//check for duplicate selections Cos4///////////////////////////////////////////////     4    //////////////
$coll4 = array($cos2,$cos3,$cos1,$cos5,$cos6,$cos7,$cos8,$cos9,$cos10);
if(in_array($cos4,$coll4)){
    //potential error start
if($cos4 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos4///////////////////////////////////////////////     4    //////////////

//check for duplicate selections Cos5///////////////////////////////////////////////     5    //////////////
$coll5 = array($cos2,$cos3,$cos4,$cos1,$cos6,$cos7,$cos8,$cos9,$cos10);
if(in_array($cos5,$coll5)){
    //potential error start
if($cos5 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos5///////////////////////////////////////////////     5    //////////////

//check for duplicate selections Cos6///////////////////////////////////////////////     6    //////////////
$coll6 = array($cos2,$cos3,$cos4,$cos5,$cos1,$cos7,$cos8,$cos9,$cos10);
if(in_array($cos6,$coll6)){
    //potential error start
if($cos6 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos6///////////////////////////////////////////////     6    //////////////

//check for duplicate selections Cos7///////////////////////////////////////////////     7    //////////////
$coll7 = array($cos2,$cos3,$cos4,$cos5,$cos6,$cos1,$cos8,$cos9,$cos10);
if(in_array($cos7,$coll7)){
    //potential error start
if($cos7 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos7///////////////////////////////////////////////     7    //////////////

//check for duplicate selections Cos8///////////////////////////////////////////////     8    //////////////
$coll8 = array($cos2,$cos3,$cos4,$cos5,$cos6,$cos7,$cos1,$cos9,$cos10);
if(in_array($cos8,$coll8)){
    //potential error start
if($cos8 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos8///////////////////////////////////////////////     8    //////////////

//check for duplicate selections Cos9///////////////////////////////////////////////     9    //////////////
$coll9 = array($cos2,$cos3,$cos4,$cos5,$cos6,$cos7,$cos8,$cos1,$cos10);
if(in_array($cos9,$coll9)){
    //potential error start
if($cos9 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos9///////////////////////////////////////////////     9    //////////////

//check for duplicate selections Cos10///////////////////////////////////////////////     10    //////////////
$coll10 = array($cos2,$cos3,$cos4,$cos5,$cos6,$cos7,$cos8,$cos9,$cos1);
if(in_array($cos10,$coll10)){
    //potential error start
if($cos10 == NULL){
//proceed to update
echo '';
}else{
return 'Duplicate Course Selected';
}
  //potential error end
}else{
 //proceed to update
 echo '';
}
//check for duplicate selections Cos10///////////////////////////////////////////////     10    //////////////

$save = course::where('user_id','=',$user)->get()->first();

$save->course1=$cos1;
$save->course2=$cos2;
$save->course3=$cos3;
$save->course4=$cos4;
$save->course5=$cos5;
$save->course6=$cos6;
$save->course7=$cos7;
$save->course8=$cos8;
$save->course9=$cos9;
$save->course10=$cos10;
$save->save();
return 'Update Successful!';
   

     }//meth end



 //search by title or course code
 public function stu_search(Request $request){

     $word = $request->input('Search');
       //my courses
  $cos = course::all()->where('user_id','=',Auth()->user()->id)->first();

  //search in title,desc and course code for word, based on my courses offered
    $result = upload::wherein('course',$cos)->where('title','Like','%'.$word.'%')
   ->orwhere('course','=',$word)->wherein('course',$cos)
   ->orwhere('description','Like','%'.$word.'%')->wherein('course',$cos)
    ->select('id','fname','title','file','size','course','level','description','created_at')
     ->paginate(4)->appends('Search', request('Search'));;

     return view('student.search')->with('result',$result);
 }





//download file
public function direct_download($file){
    
    try{
        
        $path = public_path().'/storage/files/'.$file;
        $name = $file;

        //increment dd
        $user = Auth()->user()->id;
        $incre = user::findorfail($user);

        $incre->increment('dd',1);
        
    }
    catch(\Exception $e){
        return "An Error Occured, Refresh and Try Again";
    }
         //download
         return response()->download($path, $name);

 }//meth end



}//class end
