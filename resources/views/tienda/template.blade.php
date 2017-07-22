<<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('titulo', 'Mi Tienda')</title>
</head>
<body>
	@include('tienda.partials.nav')

	@yield('content')

	@include('tienda.partials.footer')
</body>
</html>