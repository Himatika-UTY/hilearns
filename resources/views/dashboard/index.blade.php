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
									100
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
									100
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
								<i class="fa fa-users text-lg opacity-10" aria-hidden="true"></i>
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
								<p class="text-sm mb-0 text-uppercase font-weight-bold">Total Categories</p>
								<h5 class="font-weight-bolder mt-2 mb-2">
									100
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-success shadow-primary text-center rounded-circle">
								<i class="fa fa-puzzle-piece text-lg opacity-10" aria-hidden="true"></i>
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
								<p class="text-sm mb-0 text-uppercase font-weight-bold">Total Articles</p>
								<h5 class="font-weight-bolder mt-2 mb-2">
									100
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
		<div class="col-md-6 mt-3">
			<div class="card bg-default">
				<div class="card-body">
					<div class="chart">
						<canvas id="daily" class="chart-canvas"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-3">
			<div class="card bg-default">
				<div class="card-body">
					<div class="chart">
						<canvas id="monthly" class="chart-canvas"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection