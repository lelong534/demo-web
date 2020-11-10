<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function preLogin() {
    	return view('user.pre_login');
    }
    public function logout() {
        Auth::logout();
        return view('home');
    }
    public function login() {
    	return view('user.login');
    }
    public function forgetPassword() {
    	return view('user.forget_password');
    }
    public function prepaidInfo() {
        return view('user.prepaid_info');
    }
    public function postpaidInfo() {
        return view('user.postpaid_info');
    }
    public function check() {
        return view('user.check');
    }
    public function information() {
        return view('user.information');
    }
    public function update() {
        return view('user.update');
    }
    public function accountHistory() {
        return view('user.account_history');
    }
    public function connect() {
        return view('user.connect');
    }
    public function giftDetail() {
        return view('user.gift_detail');
    }
    public function changePoint() {
        return view('user.change_point');
    }
    public function checkHistory() {
        return view('user.check_history');
    }
}
