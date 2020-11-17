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

Route::get('/','HomeController@show');

Route::get('/laravel', function () {
    return view('welcome');
});

Route::post('/welcome', function(){
	return view('welcome2');
});

Route::get('/register', 'AuthController@show');
