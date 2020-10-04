<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function reflect() {
    	return view('customer.reflect');
    }
    public function question() {
    	return view('customer.question');
    }
    public function location() {
    	return view('customer.location');
    }
}
