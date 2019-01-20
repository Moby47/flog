<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//model
use App\upload;
use App\User;
use App\course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     


    public function index()
    {
            //check is lec or stu or admin
            
            $user_status = Auth()->user()->identity;
            if($user_status == 1){

                  //get id
        $id =Auth()->user()->id;
        //get recoreds
        $uploads = upload::orderby('id','desc')->where('user_id','=',$id)->select('id','title','file','course','expire','level','created_at')
        ->paginate(3);
        //get recoreds and count it
        $uploads_count = upload::where('user_id','=',$id)->select('id')
        ->get()->count();
                return view('lecturer.lec_dash')->with('uploads',$uploads)->with('uploads_count',$uploads_count);




            }elseif($user_status == 2){
                
$user = Auth()->user()->id;
$coses = course::where('user_id','=',$user)->first();

$cos1 = $coses->course1; //eg 721
 $cosa = upload::where('course','=',$cos1)->select('course')->get()->count(); //eg count == 3

$cos2 = $coses->course2; //eg 721
 $cosb = upload::where('course','=',$cos2)->select('course')->get()->count(); //eg count == 3

 $cos3 = $coses->course3; //eg 723
 $cosc = upload::where('course','=',$cos3)->select('course')->get()->count(); //eg count == 3

 $cos4 = $coses->course4; //eg 724
 $cosd = upload::where('course','=',$cos4)->select('course')->get()->count(); //eg count == 3

 $cos5 = $coses->course5; //eg 725
 $cose = upload::where('course','=',$cos5)->select('course')->get()->count(); //eg count == 3

 $cos6 = $coses->course6; //eg 726
 $cosf = upload::where('course','=',$cos6)->select('course')->get()->count(); //eg count == 3

 $cos7 = $coses->course7; //eg 727
 $cosg = upload::where('course','=',$cos7)->select('course')->get()->count(); //eg count == 3

 $cos8 = $coses->course8; //eg 728
 $cosh = upload::where('course','=',$cos8)->select('course')->get()->count(); //eg count == 3

 $cos9 = $coses->course9; //eg 729
 $cosi = upload::where('course','=',$cos9)->select('course')->get()->count(); //eg count == 3

 $cos10 = $coses->course10; //eg 7210
 $cosj = upload::where('course','=',$cos10)->select('course')->get()->count(); //eg count == 3


  return view('student.stu_dash',compact('cos1','cosa','cos2','cosb','cos3','cosc','cos4','cosd','cos5','cose'
  ,'cos6','cosf','cos7','cosg','cos8','cosh','cos9','cosi','cos10','cosj'));


            }elseif($user_status == 0){
               
                $log = upload::orderby('id','desc')->select('fname','title','file','course','expire','level','created_at')
                ->paginate(4);
//counts
          //users
     $users = user::where('identity','!=',0)->where('active','=',1)->select('id')->get()->count();
     //lec
   $lec = user::where('identity','=',1)->where('active','=',1)->select('id')->get()->count();
     //stu
     $stu = user::where('identity','=',2)->where('active','=',1)->select('id')->get()->count();
     //files
  $files = upload::where('id','!=',0)->select('id')->get()->count();

                return  view('admin.admin_dash')->with('log',$log)->with('users',$users)
                ->with('lec',$lec)->with('stu',$stu)->with('files',$files);
            }
       // return view('home');
    }
}
