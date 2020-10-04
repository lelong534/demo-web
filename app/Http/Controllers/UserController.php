<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function preLogin() {
    	return view('user.pre_login');
    }
    public function login() {
    	return view('user.login');
    }
    public function forgetPassword() {
    	return view('user.forget_password');
    }
}
