<?php

class UsersController extends \BaseController {

	protected $user;

	public function __construct(User $user) //request Eloquent object
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
		if ( ! $this->user->isValid($input = Input::all()))
		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);			
		}

		$this->$user->create($input);

		return Redirect::route('users.index');
	}
}