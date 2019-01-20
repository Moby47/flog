<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

//model
use App\upload;
use App\User;

class stumiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


          //chech if auth
          if(Auth::check()){
            //check if staff, then redirect
        if(Auth::user()->identity == 2){

              //check for expired files
                //expired files id
            $ids = upload::where('expire','<',\carbon\carbon::now())->pluck('id')->all();
            //delete all expire from DB
            upload::destroy($ids);
             //check for expired files

             //continue to page load
            return $next($request);
        }else{
            return redirect('/home')->with('redirect2', 'You Were Redirected, You Are Not Authorised To View That Page');
        }// end inner if
    
    
        }else{
    
            return redirect('/login')->with('redirect', 'Access Denied! You Are Not Logged In, Please Login');
    
        }// end 1st if




    }//meth end




}//class end
