<?php

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

Route::get('/', ['as' => 'welcome', 'uses' => 'WelcomeController@index']);

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('setting', ['as' => 'setting', 'uses' => 'HomeController@setting']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('topics', 'TopicsController');
