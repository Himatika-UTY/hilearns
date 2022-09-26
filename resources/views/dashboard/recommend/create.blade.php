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

		<div class="col-md-8">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-lg-12">
							<h6>Tambah Modul Ke Daftar Yang Direkomendasikan</h6>
						</div>
					</div>
				</div>
				<div class="card-body px-0 pt-0 pb-2 mt-2">
					<div class="container">
						<form action="{{ route('recommend.create.save') }}" method="post">
						@csrf
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Modul</label>
										<select class="form-control" name="modul">
											@foreach ($moduls as $modul)
												<option value="{{ $modul->id }}">{{ $modul->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							
							<div class="row mt-3">
								<div class="col-md-12">
									<button class="btn btn-primary btn-sm ms-auto w-100" type="submit">Add</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection