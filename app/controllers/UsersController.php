<?php

class UsersController extends \BaseController {

	public function index()
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
	}

	public function show($username)
	{
		$user = User::whereUsername($username)->first();

		return View::make('users.show', ['user' => $user]);
	}
}