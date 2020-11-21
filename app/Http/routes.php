<?php
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home','HomeController@show');

Route::get('/laravel', function () {
    return view('welcome');
});

Route::post('/welcome', function(){
	return view('welcome2');
});

Route::get('/register', 'AuthController@show');

Route::get('/', 'RootController@index');

Route::get('/data-tables', 'DatatabController@show');

// Route untuk masing-masing Method Pertanyaan-pertanyaan

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan/store', 'PertanyaanController@store');

Route::post('/pertanyaan/show', 'PertanyaanController@show');

Route::post('/pertanyaan/edit', 'PertanyaanController@edit');

Route::post('/pertanyaan/update', 'PertanyaanController@update');

Route::post('/pertanyaan/destroy', 'PertanyaanController@destroy');

