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

Route::get('home/topics', ['as' => 'my_topics', 'uses' => 'HomeController@topics']);
Route::get('home/comments', ['as' => 'my_comments', 'uses' => 'HomeController@comments']);
Route::get('setting', ['as' => 'setting', 'uses' => 'HomeController@setting']);
Route::post('user', 'HomeController@updateUser');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('topic', 'TopicsController');
Route::resource('comment', 'CommentsController', ['only' => ['store', 'update', 'destroy']]);
Route::resource('matome', 'MatomesController',  ['except' => ['index']]);

Route::post('favorite', ['as' => 'favorite', 'uses' => 'ApiController@postFavorite']);
Route::post('vote', ['as' => 'vote', 'uses' => 'ApiController@postVote']);
