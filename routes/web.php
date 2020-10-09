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
Route::prefix('introduction')->group(function () {
	Route::get('/', 'HomeController@introduct')->name('introduction');
	Route::get('history', 'HomeController@history')->name('introduction_history');
	Route::get('structure', 'HomeController@structure')->name('introduction_structure');
	Route::get('commit', 'HomeController@commit')->name('introduction_commit');
	Route::get('mission', 'HomeController@mission')->name('introduction_mission');
	Route::get('quality', 'HomeController@quality')->name('introduction_quality');
	Route::get('cooperate', 'HomeController@cooperate')->name('introduction_cooperate');
	Route::get('partner', 'HomeController@partner')->name('introduction_partner');
	Route::get('supplier', 'HomeController@supplier')->name('introduction_supplier');
});
Route::prefix('service')->group(function () {
	Route::get('/pack-of-data', 'ServiceController@packOfData')->name('packofdata');
	Route::get('/pack-of-charge', 'ServiceController@packOfCharge')->name('packofcharge');
});