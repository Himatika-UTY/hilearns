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
						<div class="col-lg-6">
							<h6>Tambah Data Category</h6>
						</div>
					</div>
				</div>
				<div class="card-body px-0 pt-0 pb-2">
					<div class="container">
						<form action="{{ route('category.create.save') }}" method="post">
						@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Name</label>
										<input class="form-control" type="text" name="name" value="{{ old('name') }}" autocomplete="off" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Slug</label>
										<div class="input-group">
											<span class="input-group-text">/</span>
											<input class="form-control" type="text" name="slug" value="{{ old('slug') }}" autocomplete="off" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Description</label>
										<input class="form-control" type="text" name="description" value="{{ old('description') }}" autocomplete="off" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Icon</label>
										<input class="form-control" type="text" name="icon" value="{{ old('icon') }}" autocomplete="off required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Color</label>
										<input class="form-control" type="text" name="color" value="{{ old('color') }}" autocomplete="off" required>
									</div>
								</div>
							</div>
							
							<div class="row mt-3">
								<div class="col-md-12">
									<button class="btn btn-primary btn-sm ms-auto w-100" type="submit">Create</button>
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