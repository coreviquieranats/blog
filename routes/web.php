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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tables', function () {
    return view('/navigation/tables');
});
Route::get('/profile', function () {
    return view('/navigation/profile');
});
Route::get('/report', function () {
    return view('/navigation/report');
});
Route::get('/settings', function () {
    return view('/navigation/settings');
});
Route::get('/notif', function () {
    return view('/navigation/notif');
});
Route::get('/icons', function () {
    return view('/navigation/icons');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth','admin']], function() {
	
	Route::get('/dashboard', function () {
    	return view('admin.dashboard');
	});
});




