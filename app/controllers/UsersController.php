<?php

class UsersController extends \BaseController {

	protected $user;

	public function __construct(User $user) //request Eloquent object and create an instance
	{
		$this->user = $user;
	}

	public function index()
	{
		$users = $this->user->all();

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
		$input = Input::all();

		if ( ! $this->user->fill($input)->isValid() ) // filling attr of user object with input
		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);			
		}

		$this->user->save();

		return Redirect::route('users.index');
	}
}