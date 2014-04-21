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
Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create');

Route::get('signout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');

Route::get('admin', function()
{
	return 'Admin Page';
})->before('auth'); // filters.php