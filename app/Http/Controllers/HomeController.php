<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
    	return view('home');
    }
    public function introduct() {
    	return view('introduction.general');
    }
    public function history() {
    	return view('introduction.history');
    }
    public function structure() {
    	return view('introduction.structure');
    }
    public function commit() {
        return view('introduction.commit');
    }
    public function mission() {
        return view('introduction.mission');
    }
    public function quality() {
        return view('introduction.quality');
    }
    public function cooperate() {
        return view('introduction.cooperation');
    }
    public function partner() {
        return view('introduction.partner');
    }
    public function supplier() {
        return view('introduction.supplier');
    }
}
