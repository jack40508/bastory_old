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
    return view('welcome');
});
//Auth Routes
Route::group(['namespace' => 'Auth'], function () {
    Route::get('register', 'RegisterController@register');
    Route::post('register', 'RegisterController@create');
    Route::get('login', 'LoginController@login');
    Route::post('login', 'LoginController@check');
});



$router->resource('test','Test\TestController');
