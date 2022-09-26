<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title inertia>{{ config('app.name', 'Laravel') }}</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
		<link href="{{ asset('css/utilities.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/loader.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/argon-design-system.css?v=1.2.2') }}" rel="stylesheet" />
		<script src="https://kit.fontawesome.com/b632dc8495.js" crossorigin="anonymous"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/default.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
		<link href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/styles/github-dark.min.css" rel="stylesheet" />

		<!-- Scripts -->
		@routes
		@viteReactRefresh
		@vite('resources/js/app.jsx')
		@inertiaHead
	</head>

	<body>
		@inertia
		<script id="dsq-count-scr" src="//hilearns.disqus.com/count.js" async></script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
		<script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
		<script src="{{ asset('js/plugins/nouislider.min.js') }}/" type="text/javascript"></script>
		<script src="{{ asset('js/plugins/moment.min.js') }}"></script>
		<script src="{{ asset('js/plugins/datetimepicker.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/plugins/headroom.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/plugins/bootstrap-datepicker.min.js') }}"></script>
		<script src="{{ asset('js/argon.js?v=1.0.1') }}" type="text/javascript"></script>
		<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
	</body>
</html>