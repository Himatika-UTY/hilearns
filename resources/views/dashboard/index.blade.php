@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-body p-4">
					<div class="row">
						<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-uppercase font-weight-bold">Today Views</p>
								<h5 class="font-weight-bolder mt-2 mb-2">
									{{ $today_viewers->count() }}
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-info shadow-primary text-center rounded-circle">
								<i class="fa fa-bar-chart text-lg opacity-10" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-body p-4">
					<div class="row">
						<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-uppercase font-weight-bold">Total Views</p>
								<h5 class="font-weight-bolder mt-2 mb-2">
									{{ $total_viewers->count() }}
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
								<i class="fa fa-eye text-lg opacity-10" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-body p-4">
					<div class="row">
						<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-uppercase font-weight-bold">Your Article</p>
								<h5 class="font-weight-bolder mt-2 mb-2">
									{{ $total_article->count() }}
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-success shadow-primary text-center rounded-circle">
								<i class="ni ni-single-copy-04 text-lg opacity-10" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-3">
			<div class="card">
				<div class="card-body p-4">
					<div class="row">
						<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-uppercase font-weight-bold">Available Modul</p>
								<h5 class="font-weight-bolder mt-2 mb-2">
									{{ $moduls->count() }}
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-warning shadow-primary text-center rounded-circle">
								<i class="fa fa-book text-lg opacity-10" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-12 mt-4">
			<div class="card bg-white shadow">
				<div class="card-body">
					<h3 class="text-center">HiLearns</h3>
					<p>Panduan Penggunaan HiLearns:</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
		<div class="modal-dialog modal-danger modal-dialog-centered m-auto" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title text-center" id="modal-title-notification">Your attention is required</h6>
				</div>
				<div class="modal-body">
					<div class="py-3 text-center">
						<i class="ni ni-bell-55 ni-3x"></i>
						<h4 class="text-gradient text-danger mt-4">Peringatan!</h4>
						<p>Passwordmu masih menggunakan password default, silahkan ganti dengan password baru.</p>
					</div>
				</div>
				<div class="modal-footer">
					<a href="{{ route('profile') }}" class="btn btn-primary ">Change now</a>
					<button type="button" class="btn btn-white" data-bs-dismiss="modal">Later</button>
				</div>
			</div>
		</div>
	</div>
</div>

@if(!$isChangePassword)
	<script type="text/javascript">
		$(window).on('load', function() {
			$('#modal').modal('show');
		});
	</script>
@endif


@endsection