@extends('layouts.default')
@section('content')
		<h1>Hello, {{ $user->username }}</h1>
		
		<div>
			{{ link_to("/users", "Back to All Users") }}
		</div>
	</body>
@stop