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

		<div class="col-8">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-lg-6">
							<h6>Edit Data Modul</h6>
						</div>
					</div>
				</div>
				<div class="card-body px-0 pt-0 pb-2">
					<div class="container">
						<form action="{{ route('modul.edit.save', $modul->id) }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Name</label>
										<input class="form-control" type="text" name="name" value="{{ old('name') ? old('name') : $modul->name }}" autocomplete="off" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Category</label>
										<select class="form-control" name="category" autocomplete="off" required>
											@foreach ($categories as $category)
												@if ($category->id == $modul->id_category)
													<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
												@else
													<option value="{{ $category->id }}">{{ $category->name }}</option>
												@endif
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Slug</label>
										<input class="form-control" type="text" name="slug" value="{{ old('slug') ? old('slug') : $modul->slug }}" autocomplete="off" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Image</label>
										<input class="form-control" type="file" name="image" value="{{ old('image') ? old('image') : $modul->image }}" autocomplete="off">
										<div class="form-text">*Image tidak wajib diganti</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Level</label>
										<select class="form-control" name="level" value="{{ old('level') ? old('level') : $modul->level }}" autocomplete="off" required>
											@if($modul->level == 'Dasar')
												<option value="Dasar" selected>Dasar</option>
												<option value="Menengah">Menengah</option>
												<option value="Pro">Pro</option>
											@elseif($modul->level == 'Menengah')
												<option value="Dasar">Dasar</option>
												<option value="Menengah" selected>Menengah</option>
												<option value="Pro">Pro</option>
											@else
												<option value="Dasar">Dasar</option>
												<option value="Menengah">Menengah</option>
												<option value="Pro" selected>Pro</option>
											@endif
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Description</label>
										<input class="form-control" type="text" name="description" value="{{ old('description') ? old('description') : $modul->description }}" autocomplete="off">
									</div>
								</div>
							</div>
							
							<div class="row mt-3">
								<div class="col-md-12">
									<button class="btn btn-primary btn-sm ms-auto w-100" type="submit">Update</button>
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