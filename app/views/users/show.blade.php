@extends('layouts.default')
@section('content')
		<h1>Hello, {{ $user->username }}</h1>

		{{ link_to("/users", "Back to All Users") }}
	</body>
@stop