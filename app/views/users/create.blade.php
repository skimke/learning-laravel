@extends('layouts.default')
@section('content')
		<h1>Create New User</h1>

		{{ Form::open(['route' => 'users.store']) }}
			<div>
				{{ Form::label('username', "Username: ") }}
				{{ Form::text('username') }} <!-- {{ Form::input('text', "username") }} -->
			</div>

			<div>
				{{ Form::label('password', "Password: ") }}
				{{ Form::password('password') }} <!-- {{ Form::input('password', "password") }} -->				
			</div>

			<div>
				{{ Form::label('checkbox', "I agree to the terms and conditions: ") }}
				{{ Form::checkbox('checkbox') }}
			</div>

			<div>
				{{ Form::submit('Create User') }}
			</div>
		{{ Form::close() }}

@stop