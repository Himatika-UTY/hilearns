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
							<h6>Tambah Data Contributor</h6>
						</div>
					</div>
				</div>
				<div class="card-body px-0 pt-0 pb-2 mt-2">
					<div class="container">
						<form action="{{ route('contributors.create.save') }}" method="post" enctype="multipart/form-data">
						@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Name</label>
										<select class="form-control" name="name" value="{{ old('name') }}" autocomplete="off" required>
											@foreach ($pengurus['data'] as $value)
												<option value="{{ $value['nama'] }}">{{ $value['nama'] }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Position</label>
										<select class="form-control" name="position" value="{{ old('position') }}" autocomplete="off" required>
											<option value="Web Developer">Web Developer</option>
											<option value="Curiculum Developer">Curiculum Developer</option>
											<option value="Content Writer">Content Writer</option>
											<option value="Community Moderator">Community Moderator</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Image</label>
										<input class="form-control" type="file" name="image" value="{{ old('image') }}" autocomplete="off" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Redirect Url</label>
										<input class="form-control" type="url" name="redirect_url" value="{{ old('redirect_url') }}" autocomplete="off" required>
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
<script>
	// 
</script>
@endsection