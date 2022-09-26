<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Design System for Bootstrap 4.">
	<meta name="author" content="Creative Tim">
	<title>{{ env('APP_NAME') }} | {{ $title }}</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="{{ asset('css/utilities.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/loader.css') }}" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/b632dc8495.js" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link href="{{ asset('css/argon-design-system.css?v=1.2.2') }}" rel="stylesheet" />
</head>

<body>
	<main>
		<section class="section section-shaped section-lg" style="min-height: 100vh;">
			<div class="shape shape-style-1 shape-dark">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			</div>
			<div class="container pt-lg-md mt-lg-4">
				<div class="row justify-content-center">
					@if ($errors->any())
						<div class="col-md-5">
							<div class="alert alert-danger text-white" style="border: none;" role="alert">
								@foreach ($errors->all() as $error)
									{{ $error }}
								@endforeach
							</div>
						</div>
					@elseif ($message = Session::get('success'))
						<div class="col-md-5">
							<div class="alert alert-success text-white" style="border: none;" role="alert">
								{{ $message }}
							</div>
						</div>
					@endif
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-5">
						<div class="card bg-secondary shadow border-0">
							<div class="card-header bg-white pb-3">
								<div class="text-muted text-center">
									<h3 class="font-weight-bolder text-default mt-1">Himatika UTY</h3>
								</div>
							</div>
							<div class="card-body px-lg-5 py-lg-3">
								<div class="text-center text-muted mb-4">
									<small>Silahkan Login Menggunakan Akunmu</small>
								</div>
								<form role="form" action="{{ route('login.auth') }}" method="POST">
									@csrf
									<div class="form-group mb-3">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
											</div>
											<input class="form-control" placeholder="Username" type="text" name="username" autocomplete="off" required autofocus> 
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
											</div>
											<input class="form-control" placeholder="Password" type="password" name="password" autocomplete="off" required>
										</div>
									</div>
									<div class="custom-control custom-control-alternative custom-checkbox">
										<input class="custom-control-input" id=" customCheckLogin" type="checkbox">
										<label class="custom-control-label" for=" customCheckLogin">
											<span>Remember me</span>
										</label>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-primary my-4">Sign in</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- Core -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/plugins/headroom.min.js') }}" type="text/javascript"></script>
	<!-- Argon JS -->
	<script src="{{ asset('js/argon.js?v=1.0.1') }}" type="text/javascript"></script>
</body>
</html>