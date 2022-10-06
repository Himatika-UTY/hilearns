@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		@if ($errors->any())
		<div class="col-md-8">
			<div class="alert alert-danger text-white" style="border: none;" role="alert">
				@foreach ($errors->all() as $error)
					{{ $error }}
				@endforeach
			</div>
		</div>
		@endif

		@if ($message = Session::get('success'))
			<div class="col-md-8">
				<div class="alert alert-success text-white" style="border: none;" role="alert">
					{{ $message }}
				</div>
			</div>
		@elseif ($message = Session::get('error'))
			<div class="col-md-8">
				<div class="alert alert-success text-white" style="border: none;" role="alert">
					{{ $message }}
				</div>
			</div>
		@endif

		<div class="col-lg-8">
			<div class="card">
				<div class="card-body p-4">
					<div class="row">
						<h4 class="fw-bold text-center">Update Your Password</h4>
						<p class="text-center">Silahkan ganti password anda, jangan gunakan password default</p>
					</div>
					<div class="row mt-2">
						<div class="col-md-12">
							<form action="{{ route('profile.update') }}" method="POST">
								@csrf						
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Password</label>
											<div class="input-group mb-4">
												<input class="form-control" name="password" type="password" required>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Confirm Password</label>
											<div class="input-group mb-4">
												<input class="form-control" name="cnfrm_password" type="password" required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary w-100">Update</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection