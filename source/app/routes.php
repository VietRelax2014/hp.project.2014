<?php

use Illuminate\Support\Facades\View;
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

Route::get('/', "HomeController@redirectHome");

Route::get ( '/watcher/{id}', "WatcherController@watching" );

Route::get ( '/updateFilm', "GetIMDbController@doView");

Route::get ( '/getIMDb/{id}', "GetIMDbController@getIMDbByURL" );