@php
	use Illuminate\Support\Stringable;
	use Illuminate\Support\Str;
@endphp

@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		@if ($message = Session::get('success'))
			<div class="col-md-12">
				<div class="alert alert-success text-white" style="border: none;" role="alert">
					{{ $message }}
				</div>
			</div>
		@endif
		<div class="col-md-12">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-lg-6">
							<h6>Your Articles</h6>
						</div>
						<div class="col-lg-6 justify-content-end d-flex">
							<a href="{{ route('article.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Tambah</a>
						</div>
					</div>
				</div>
				<div class="card-body p-3 pb-2">
					<div class="table-responsive p-0">
						<table id="tblArticle" class="table table-striped" style="width:100%">
							<thead>
									<tr>
										<th>NO</th>
										<th>Title</th>
										<th>Author</th>
										<th>Topic</th>
										<th>Modul</th>
										<th>Cover</th>
										<th>Created At</th>
										<th>Actions</th>
									</tr>
							</thead>
							<tbody>
								@foreach ($articles as $article)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $article->title }}</td>
										<td>{{ $article->author }}</td>
										<td>
											@php
											$topics = explode(',', strip_tags($article->topic));
											foreach ($topics as $value) {
												echo '<span class="badge bg-primary text-white">'.$value.'</span>&nbsp;';
											}
											@endphp
										</td>
										<td>{{ $article->modul->name }}</td>
										<td><a href="/upload/articles/{{ $article->image }}" target="_blank">{{ $article->image }}</a> </td>
										<td>{{ $article->created_at }}</td>
										<td class="d-flex">
											<a href="{{ route('read', $article->slug) }}" target="_blank" class="badge btn-delete bg-success border-0 btn-delete text-white">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
											<a href="{{ route('article.edit', $article->id) }}" class="badge ms-1 bg-warning border-0 btn-delete text-white">
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</a>
											<form method="POST" action="{{ route('article.delete', $article->id) }}">
											@csrf
											@method('DELETE')
												<button type="submit" class="badge bg-danger border-0 btn-delete ms-1">
													<i class="fa fa-trash" aria-hidden="true"></i>
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready( function () {
		var table = $('#tblArticle').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'csv', 'excel', 'pdf'
			]
		});
	});
</script>
@endsection