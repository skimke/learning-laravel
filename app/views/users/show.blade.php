<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Hello, {{ $user->username }}</h1>

		{{ link_to("/users", "Back to All Users") }}
	</body>
</html>