@php
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
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-lg-6">
							<h6>List Categories</h6>
						</div>
						<div class="col-lg-6 justify-content-end d-flex">
							<a href="{{ route('category.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Tambah</a>
						</div>
					</div>
				</div>
				<div class="card-body p-3 pb-2">
					<div class="table-responsive p-0">
						<table id="tblCategory" class="table table-striped" style="width:100%">
							<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Slug</th>
										<th>Description</th>
										<th>Icon</th>
										<th>Color</th>
										<th>Actions</th>
									</tr>
							</thead>
							<tbody>
								@foreach ($categories as $category)
									<tr>
										<td>{{ $category->id }}</td>
										<td>{{ $category->name }}</td>
										<td>{{ $category->slug }}</td>
										<td>{{ Str::of($category->description)->limit(50) }}</td>
										<td>{{ $category->icon }}</td>
										<td>{{ $category->color }}</td>
										<td class="d-flex">
											<a href="{{ route('category.edit', $category->id) }}" class="badge bg-warning border-0 btn-delete text-white">
												<i class="bi bi-trash text-light"></i> Edit
											</a>
											<form method="POST" action="{{ route('category.delete', $category->id) }}">
											@csrf
											@method('DELETE')
												<button type="submit" class="badge bg-danger border-0 btn-delete ms-1">
													<i class="bi bi-trash text-light"></i> Delete
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
		var table = $('#tblCategory').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'csv', 'excel', 'pdf'
			]
		});
	});
</script>
@endsection