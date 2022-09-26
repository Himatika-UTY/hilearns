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
		<div class="col-md-12">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-lg-6">
							<h6>List Modul Yang Direkomendasikan</h6>
						</div>
						<div class="col-lg-6 justify-content-end d-flex">
							<a href="{{ route('recommend.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Tambah</a>
						</div>
					</div>
				</div>
				<div class="card-body p-3 pb-2">
					<div class="table-responsive p-0">
						<table id="tblRecommend" class="table table-striped" style="width:100%">
							<thead>
									<tr>
										<th>ID</th>
										<th>Modul</th>
										<th>Created At</th>
										<th>Actions</th>
									</tr>
							</thead>
							<tbody>
								@foreach ($recommends as $recommend)
									<tr>
										<td>{{ $recommend->id }}</td>
										<td>{{ $recommend->modul->name }}</td>
										<td>{{ $recommend->created_at }}</td>
										<td class="d-flex">
											<form method="POST" action="{{ route('recommend.delete', $recommend->id) }}">
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
		var table = $('#tblRecommend').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'csv', 'excel', 'pdf'
			]
		});
	});
</script>
@endsection