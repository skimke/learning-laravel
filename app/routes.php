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

Route::get('users', function() 
{
	$users = User::all();

	return View::make('users.index', ['users' => $users]);

	// CREATE
	// User::create([
	// 	'username' => 'Stella',
	// 	'password' => Hash::make('password')
	// ]);


	// UPDATE
	// $user = User::find(4);
	// $user->username = 'Snella';
	// $user->save();


	// DELETE
	// $user = User::find(5);
	// $user->delete();

	
	// RETURN
	// return User::all();
	// return User::orderBy('username', 'asc')->take(2)->get();
});

Route::get('users/{username}', function($username) 
{
	$user = User::whereUsername($username)->first();

	return View::make('users.show', ['user' => $user]);
});