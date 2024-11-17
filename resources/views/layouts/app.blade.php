<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body data-bs-theme="dark">
	@include('layouts.header')
	@include('layouts.navigation')
	@yield('content')
</body>

</html>
