<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('head-title')</title>

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/app.css">
	@yield('head-css')

</head>
<body>
	
	@include ('partials.navbar')

	@yield('body-content')

	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/app.js"></script>
	@yield('body-js')
</body>
</html>