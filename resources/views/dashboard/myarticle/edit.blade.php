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
							<h6>Create Article</h6>
						</div>
					</div>
				</div>
				<div class="card-body px-0 pt-0 pb-2">
					<div class="container">
						<form action="{{ route('myarticle.edit.save', $article->id) }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Title</label>
										<input class="form-control" type="text" name="title" value="{{ old('title') ? old('title') : $article->title }}" autocomplete="off" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Modul</label>
										<select class="form-control" name="modul" value="{{ old('modul') }}" autocomplete="off" required>
											@foreach ($moduls as $modul)
												@if ($modul->id == $article->id_modul)
													<option value="{{ $modul->id }}" selected>{{ $modul->name }}</option>
												@else
													<option value="{{ $modul->id }}">{{ $modul->name }}</option>
												@endif
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Tags</label>
										<input name='topic' id="tags" value='{{ $article->topic }}' class="form-control" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Cover Image</label>
										<input name='image' type="file" class="form-control" value="{{ $article->image }}">
										<div class="form-text text-danger">*Kosongkan jika tidak ingin mengganti image</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Content</label>
										<input type="hidden" name="content" value="{{ old('content') ? old('content') : $article->content}}">
                        		<div id="editor" style="min-height: 150px;">{!! $article->content !!}</div>
										<div class="form-text text-danger">*Maximum Image Size: 32MB</div>
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
<script>
	var quill = new Quill('#editor', {
	modules: {
		syntax: true,              // Include syntax module
		toolbar: [['code-block']]  // Include button in toolbar
	},
	theme: 'snow'
	});
</script>
<script>
	var input = document.getElementById("tags");
	new Tagify(input)
</script>
<script src="{{ asset('js/quil-image.js') }}"></script>
@endsection