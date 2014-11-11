<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reyes Group </title>
	@include('partials.meta-tags')
	@include('partials.styles')
</head>
<body>
	<header>@include('partials.nav')</header>
	@yield('content')
	<footer>@include('partials.footer')</footer>
	@include('partials.scripts')
</body>
</html>
