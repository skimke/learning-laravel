@extends('layouts.default')
@section('content')
		<h1>Create New User</h1>

		{{ Form::open(['route' => 'users.store']) }}
			<div>
				{{ Form::label('username', "Username: ") }}
				{{ Form::text('username') }} <!-- {{ Form::input('text', "username") }} -->
				{{ $errors->first('username', '<span class=error>:message</span>')}}
			</div>

			<div>
				{{ Form::label('password', "Password: ") }}
				{{ Form::password('password') }} <!-- {{ Form::input('password', "password") }} -->				
				{{ $errors->first('password', '<span class=error>:message</span>')}}
			</div>

			<div>
				{{ Form::label('checkbox', "I agree to the terms and conditions: ") }}
				{{ Form::checkbox('checkbox') }}
			</div>

			<div>
				{{ Form::submit('Create User') }}
			</div>
		{{ Form::close() }}
		
		<div>
			{{ link_to("/users", "Back to All Users") }}
		</div>
@stop