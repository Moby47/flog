<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//model
use App\upload;
use App\User;
use App\newmodel;
use App\course;

class landingcontroller extends Controller
{
    

    //landing page

    public function homepage(){
        if(Auth()->check()){

          //get id
       $id =Auth()->user()->id;

        //Stats count
$staff = User::where('identity','=',1)->where('active','=',1)->get()->count();
$stu = User::where('identity','=',2)->get()->count();
$files = upload::orderby('id','=','desc')->get()->count();
 $dd = User::where('identity','=',2)->pluck('dd')->sum();
$news = newmodel::orderby('id','=','desc')->take(1)->get();

       //if staff
       if(Auth()->user()->identity == 1){
            //get recoreds
      $uploads1 = upload::orderby('id','desc')->where('user_id','=',$id)
      ->select('title','level','description')
      ->take(3)->get();
      //get recoreds
     $uploads2 = upload::orderby('id','desc')->where('user_id','=',$id)
     ->select('title','level','description')->skip(3)->take(3)->get();

          return view('index')->with('uploads1',$uploads1)->with('uploads2',$uploads2)->with('staff',$staff)
          ->with('stu',$stu)->with('files',$files)->with('news',$news)->with('dd',$dd);
       }

        //if admin
        if(Auth()->user()->identity == 0){
            //get recoreds
      $uploads1 = upload::orderby('id','desc')
      ->select('title','fname','level','description')
      ->take(3)->get();
      //get recoreds
     $uploads2 = upload::orderby('id','desc')
     ->select('title','fname','level','description')->skip(3)->take(3)->get();

          return view('index')->with('uploads1',$uploads1)->with('uploads2',$uploads2)->with('staff',$staff)
          ->with('stu',$stu) ->with('files',$files)->with('news',$news)->with('dd',$dd);
       }
      



           //if student
           if(Auth()->user()->identity == 2){
            //get recoreds
      
      $user_id =Auth()->user()->id;
      
       //my courses
    $cos = course::all()->where('user_id','=',$user_id)->first();

    $uploads1 = upload::orderby('id','desc')
     ->wherein('course',$cos)
     ->select('id','fname','title','file','level','description') ->take(3)->get();
    
      //get recoreds
     $uploads2 = upload::orderby('id','desc')
     ->wherein('course',$cos)
     ->select('id','fname','title','file','level','description')->skip(3)->take(3)->get();

          return view('index')->with('uploads1',$uploads1)->with('uploads2',$uploads2)->with('staff',$staff)
          ->with('stu',$stu) ->with('files',$files)->with('news',$news)->with('dd',$dd);
       }

           
        }else{
            //no auth 
              //Stats count
$staff = User::where('identity','=',1)->where('active','=',1)->get()->count();
$stu = User::where('identity','=',2)->get()->count();
$files = upload::orderby('id','=','desc')->get()->count();
$dd = User::where('identity','=',2)->pluck('dd')->sum();
$news = newmodel::orderby('id','=','desc')->take(1)->get();

/*get guest ip
if ip found in db
take user id
get user course and display  ####PLAN CANCELED
*/
      //get recoreds
      $uploads1 = upload::inRandomOrder()
      ->select('title','fname','level')
      ->take(3)->get();
      //get recoreds
     $uploads2 = upload::inRandomOrder()
     ->select('title','fname','level')->take(3)->get();


           return view('index')->with('staff',$staff)->with('stu',$stu) ->with('files',$files)->with('news',$news)
           ->with('dd',$dd)->with('uploads1',$uploads1)->with('uploads2',$uploads2);
        }
       
    }


public function quick(){
    //get device IP
        //whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
{
  $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
{
  $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//whether ip is from remote address
else
{
  $ip_address = $_SERVER['REMOTE_ADDR'];
}

$user = User::where('ip','=',$ip_address)->where('active','=',1)->get()->first();

if($user){
    //user's name
   $username = $user->fname;
//reged once, Auth user
    Auth()->login($user);
//redirect to dash
return redirect('/home')->with('quickAss', 'Welcome'.' '.$username);
       
}else{
//not reged or new device
return redirect('/login')->with('redirect', 'Instant Access Failed! Please Login With Credentials');
    
}

}//meth end





public function terms(){
    
    return view('terms');
}




}//class
