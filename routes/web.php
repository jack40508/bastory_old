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

//Auth Routes
Route::group(['namespace' => 'Auth'], function () {
    Route::get('register', 'RegisterController@register');
    Route::post('register', 'RegisterController@create');
    Route::get('login', 'LoginController@login');
    Route::post('login', 'LoginController@check');
});

//Team Routes
Route::group(['namespace' => 'Team'],function (){
	Route::get('team/{team_name}/game','TeamController@game');
});

$router->resource('test','Test\TestController');
$router->resource('/home','Bastory\BastoryController');
$router->resource('/team/{team_name}','Team\TeamController');
