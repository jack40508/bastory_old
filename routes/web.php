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

//Bastory Home Routes
$router->resource('/','Bastory\BastoryController');

//Team Game Routes
Route::group(['namespace' => 'Team'],function (){
	Route::get('team/{team_name}/pastgame','GameController@pastgame');
});
$router->resource('/team/{team_name}/game','Team\GameController');

//Team Game Result Routes
$router->resource('/team/{team_name}/gameresult','Team\GameResultController');

//Team Routes
Route::group(['namespace' => 'Team'],function (){
	Route::get('team/{team_name}/about','TeamController@about');
	Route::get('team/{team_name}/introduction','TeamController@introduction');
});
$router->resource('/team/{team_name}','Team\TeamController');

$router->resource('test','Test\TestController');



