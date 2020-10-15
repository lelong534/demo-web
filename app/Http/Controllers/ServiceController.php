<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function packOfCharge() {
    	return view('service.pack_of_charge');
    }
    public function packOfData() {
    	return view('service.pack_of_data');
    }
    public function packOfService() {
    	return view('service.pack_of_service');
    }
}
