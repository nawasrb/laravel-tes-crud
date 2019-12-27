<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }
    public function postlogin(Request $request)
    {
    	if(Auth::attemp($request->only('email','password'))){
    		return redirect('/nasabah');
    	}
    	return redirect('/login');
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }

    public function register()
    {
    	return view('auth.register');
    }

    protected function validator(array $data)
    {
    	return validator::make($data,[
    		'name'=> 'required',
    		'email'=> 'required',
    		'password'=> 'required',
    		'role'=> 'required',
    	]);
    }

    protected function create(array $data)
    {
    	return User::craete([
    		'name'=> '$data[name]',
    		'email'=> '$data[email]',
    		'password'=> '$data[password]',
    		'role'=> '$data[role]',
    	]);
    }
}
