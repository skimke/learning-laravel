@extends('layouts.default')
@section('content')
		<h1>All Users</h1>
		
		@if ($users->count())
			@foreach ($users as $user)
				<li>{{ link_to("/users/{$user->username}", $user->username) }}</li>		
			@endforeach

			{{ link_to("/", "Back Home") }}
		@else
			<p>Sorry, there are no users yet.</p>
		@endif
@stop