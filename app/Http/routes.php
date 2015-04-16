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

Route::get('/', 'TopicsController@index');

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('setting', ['as' => 'setting', 'uses' => 'HomeController@setting']);
Route::post('user', 'HomeController@updateUser');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('topic', 'TopicsController');
Route::resource('comment', 'CommentsController', ['only' => ['store', 'update', 'destroy']]);

Route::post('favorite', ['as' => 'favorite', 'uses' => 'FavoritesController@postFavorite']);
