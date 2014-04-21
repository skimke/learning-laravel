@extends('layouts.default')
@section('content')
		<h1>Home</h1>

		<ul>
			<li>{{ link_to("/users/", "Users") }}</li>
			<li>{{ link_to("/about/", "About") }}</li>
		</ul>
@stop