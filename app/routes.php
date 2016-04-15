<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/resume', 'HomeController@showResume');

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::get('/rolldice/{guess}', function($guess) {

	$number = mt_rand(1, 6);

	$data = ['number' => $number, 'guess' => $guess];
	return View::make('roll-dice')->with($data);
});

Route::get('/simpleSimon', 'HomeController@showSimon');

Route::resource('posts', 'PostsController');

Route::get('/login', 'HomeController@getLogin');

Route::post('/login', 'HomeController@postLogin');

Route::get('/logout', 'HomeController@getLogout');