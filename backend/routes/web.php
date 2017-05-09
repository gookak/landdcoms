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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function(){
	return view('index');
});

Route::resource('category', 'CategoryController');

Route::resource('product', 'ProductController');

Route::get('/fileupload', 'FileuploadController@index');

Route::get('/show', 'FileuploadController@show');

Route::post('/fileupload', 'FileuploadController@upload');

Route::post('/fileupload/{id}', 'FileuploadController@destroy');

Route::get('/apigetfileupload', 'ApiController@apigetfileupload');

