<!doctype html>
<html lang="es">
<head>
	@include('partials.meta-tags')
	<title>Reyes Group</title>
	@include('partials.styles')
</head>
<body class="{{ Request::path() }}">
	<header>@include('partials.nav')</header>
	@yield('content')
	<footer>@include('partials.footer')</footer>
	@include('partials.scripts')
	@if(getenv('APP_ENV') == 'production')
		@include('partials.googleAnalytics')
	@endif
</body>
</html>