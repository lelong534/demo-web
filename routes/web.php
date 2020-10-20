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
Route::get('/pre-login', 'UserController@preLogin')->name('pre_login');
Route::get('/login', 'UserController@login')->name('login');
Route::get('/forget-password', 'UserController@forgetPassword')->name('forget_password');
Route::prefix('employ')->group(function () {
	Route::get('/', 'EmployController@grid')->name('employ');
	Route::get('detail', 'EmployController@getDetail')->name('employ_detail');
	Route::get('sendcv', 'EmployController@getSendcv')->name('employ_sendcv');
	Route::post('sendcv', 'EmployController@postCV');
});
Route::prefix('news')->group(function () {
	Route::get('/', 'NewsController@index')->name('news');
	Route::get('detail', 'NewsController@detail')->name('news_detail');
});
Route::prefix('user')->group(function () {
	Route::get('prepaid-info', 'UserController@prepaidInfo')->name('prepaid_info');
	Route::get('postpaid-info', 'UserController@postpaidInfo')->name('postpaid_info');
	Route::get('check', 'UserController@check')->name('user_check');
	Route::get('information', 'UserController@information')->name('user_information');
	Route::get('update', 'UserController@update')->name('user_update');
	Route::get('account-history', 'UserController@accountHistory')->name('account_history');
	Route::get('connect', 'UserController@connect')->name('user_connect');
	Route::get('gift/detail', 'UserController@giftDetail')->name('gift_detail');
	Route::get('change-point', 'UserController@changePoint')->name('change_point');
	Route::get('check-history', 'UserController@checkHistory')->name('check_history');
});
Route::prefix('customer')->group(function() {
	Route::get('reflect', 'CustomerController@reflect')->name('customer_reflect');
	Route::get('question', 'CustomerController@question')->name('customer_question');
	Route::get('location', 'CustomerController@location')->name('customer_location');
});
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
	Route::get('/pack-of-data', 'ServiceController@packOfData')->name('pack_of_data');
	Route::get('/pack-of-charge', 'ServiceController@packOfCharge')->name('pack_of_charge');
	Route::get('/pack-of-service', 'ServiceController@packOfService')->name('pack_of_service');
});
Route::prefix('utilities')->group(function () {
	Route::get('/', 'UtilitiesController@index')->name('utilities_index');
	Route::get('/payment-method', 'UtilitiesController@paymentMethod')->name('utilities_payment_method');
	Route::get('/add-phone-number', 'UtilitiesController@addPhoneNumber')->name('utilities_add_phone_number');
});