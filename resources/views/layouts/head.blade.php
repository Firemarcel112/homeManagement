<head>
	<title>{{ config('app.name') }}</title>
	<link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/tabler-vendor.css') }}">
	<link rel="stylesheet" href="{{ asset('css/tabler-flags.min.css') }}" >
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">


	<script src="{{ asset('js/tabler.min.js') }}"></script>
	<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
	<script>
		var app_global = {
			theme: "{{ config('app.theme') }}"
		}
	</script>
	<script src="{{ asset('js/common.js') }}"></script>
</head>
