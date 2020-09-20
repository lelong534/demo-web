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

Route::get('/', 'EmployController@grid')->name("employ");
Route::get('/detail/{id}', [
	'as' => 'detail',
	'uses' => 'EmployController@getDetail'
]);
// Route::post('/detail/{id}', 'EmployController@postCV');
Route::get('/sendcv/{id}', 'EmployController@getSendcv')->name('sendcv');
Route::post('/sendcv/{id}', 'EmployController@postCV')->name('sendcv');
Route::get('/home' , 'HomeController@index')->name('home');

