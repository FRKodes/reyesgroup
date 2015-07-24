<!doctype html>
<html lang="es">
<head>
	@include('partials.meta-tags')
	<title>@yield('gallerytitle')</title>
	@include('partials.styles')
</head>
<body class="{{ Request::path() }}">
	<header>@include('partials.nav-galeria')</header>
	@yield('content')
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/gallery-scripts.js"></script>
	@if(getenv('APP_ENV') == 'production')
		@include('partials.googleAnalytics')
	@endif
</body>
</html>