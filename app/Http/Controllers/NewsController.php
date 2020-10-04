<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index() {
    	return view('news.news');
    }
    public function detail() {
    	return view('news.news_detail');
    }
}
