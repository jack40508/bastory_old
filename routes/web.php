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
    Route::get('logout', 'LoginController@logout');
});

//Bastory Home Routes
Route::group(['namespace' => 'Bastory','middleware' => 'player'], function(){
	Route::get('/','BastoryController@index');
});

Route::group(['namespace' => 'Team'],function (){
	//Game Routes
	Route::get('team/{team_name}/pastgame','GameController@pastgame');
	Route::resource('/team/{team_name}/game','GameController');
	//Team Game Result Routes
	Route::resource('/team/{team_name}/gameresult','GameResultController');
	//Team Routes
	Route::get('team/{team_name}/about','TeamController@about');
	Route::get('team/{team_name}/introduction','TeamController@introduction');
	Route::resource('/team','TeamController');
});

$router->resource('test','Test\TestController');
