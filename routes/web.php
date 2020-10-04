<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name("home");
Route::get('/employ', 'EmployController@grid')->name("employ");
Route::get('/detail/{id}', [
	'as' => 'detail',
	'uses' => 'EmployController@getDetail'
]);
// Route::post('/detail/{id}', 'EmployController@postCV');
Route::get('/sendcv/{id}', 'EmployController@getSendcv')->name('sendcv');
Route::post('/sendcv/{id}', 'EmployController@postCV')->name('sendcv');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/detail', 'NewsController@detail')->name('news_detail');
Route::get('/pre-login', 'UserController@preLogin')->name('pre_login');
Route::get('/login', 'UserController@login')->name('login');
Route::get('/forget-password', 'UserController@forgetPassword')->name('forget_password');
Route::get('/customer/reflect', 'CustomerController@reflect')->name('customer_reflect');
Route::get('/customer/question', 'CustomerController@question')->name('customer_question');
Route::get('/customer/location', 'CustomerController@location')->name('customer_location');