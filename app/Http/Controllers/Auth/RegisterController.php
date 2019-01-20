<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'First_name' => 'required|string|max:25',
            'Last_name' => 'required|string|max:25',
            'email' => 'required|string|email|max:255|unique:users',
            'Identity' => 'required|string|max:25',
            'Staff_ID' => 'required|string',
            'Number' => 'required|numeric|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //get user ip
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


        return User::create([
            'fname' => $data['First_name'],
            'lname' => $data['Last_name'],
            'email' => $data['email'],
            'identity' => $data['Identity'],
            'staffid' => $data['Staff_ID'],
            'Number' => $data['Number'],
            'active' => $data['active'],
            'ip' => $ip_address,
            'dd'=>0,
            'password' => bcrypt($data['password']),
        ]);
    }
}
