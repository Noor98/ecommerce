<?php

Route::group(['middleware' => 'Maintenance'], function () {

		Route::get('/', function () {
				return view('style.home');
			});
	});


Route::get('maintenance', function () {

		if (setting()->status == 'open') {
			return redirect('/');
		}

		return view('style.maintenance');
	});

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/hello', function () {
//    return view("hello");
//});
//Route::get('/basel', function () {
//    return "Welcome Basel";//content
//});
//Route::get('/r', function () {
//    return redirect("/hello");//redirect
//});
//Route::get('/product/{id}', function ($id) {
//    return "Product details for # $id";
//});
//Route::get('/news/{id?}', function ($id="") {
//    return "news details for # $id";
//});
