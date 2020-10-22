<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    //
    public function index() {
    	return view('utilities.index');
    }
    public function paymentMethod() {
    	return view('utilities.payment_method');
    }
    public function addPhonePrepaid() {
    	return view('utilities.add_phone_prepaid');
    }
    public function addPhonePostpaid() {
        return view('utilities.add_phone_postpaid');
    }
}
