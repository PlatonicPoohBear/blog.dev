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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/portfolio', function()
{
	return View::make('portfolio');
});

Route::get('/resume', function()
{
	return View::make('resume');
});

Route::get('/sayhello/{name?}', function($name = 'Codeup') {

	$data = ['name' => $name];
	return View::make('my-first-view')->with($data);
});

Route::get('/rolldice/{guess}', function($guess) {

	$number = mt_rand(1, 6);

	$data = ['number' => $number, 'guess' => $guess];
	return View::make('roll-dice')->with($data);
});