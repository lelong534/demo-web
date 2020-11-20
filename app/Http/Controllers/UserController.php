<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use AuthenticatesUsers;

class UserController extends Controller
{
    
    public function preLogin() {
    	return view('user.pre_login');
    }
    public function logout() {
        Auth::logout();
        return view('home');
    }
    public function getLogin() {
    	return view('user.login');
    }
    public function login(Request $request) {
        $data = [
            'phone' => $request->phone,
            'password' => $request->password
        ];

        $message = [
            'required' => 'Trường thông tin bắt buộc',
            'string' => 'Nhập sai định dạng',
            'max' => 'Nhập quá chiều dài quy định',
            'min' => 'Trường thông tin chưa đủ'
        ];

        $validatedData = $request->validate([
            'phone' => ['required', 'string', 'max:10'],
            'password' => ['required', 'string', 'min:8'],
        ], $message);

        if(!$validatedData) {
            if (Auth::attempt($data)) {
                return Auth::user();
            } else {
                return "false";
            }
        } else {
            redirect('login')->withInput($request);
        }
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
