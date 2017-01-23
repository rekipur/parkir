<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/ajax', 'MasukController@ajax');

Route::post('/cek', 'MasukController@cek');

Route::group(['middleware'=>'web'], function (){
	Route::group(['middleware'=>['auth','role:admin']], function () {
		Route::resource('jenis_kendaraan', 'JkendaraanController');
		Route::resource('masuk', 'MasukController');
	});	
});