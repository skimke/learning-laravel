<?php

class UsersController extends \BaseController {

	public function index()
	{
		$users = User::all();

		return View::make('users.index', ['users' => $users]);
	}

	public function show($username)
	{
		$user = User::whereUsername($username)->first();

		return View::make('users.show', ['user' => $user]);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{
		$validation = Validator::make(Input::all(), ['username' => 'required', 'password' => 'required']);

		if ($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		} else {
			$user = new User;
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->save();
		}

		return Redirect::route('users.index');
	}
}