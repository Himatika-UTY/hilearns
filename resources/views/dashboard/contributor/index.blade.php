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
							<h6>List Contributors</h6>
						</div>
						<div class="col-lg-6 justify-content-end d-flex">
							<a href="{{ route('contributors.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Tambah</a>
						</div>
					</div>
				</div>
				<div class="card-body p-3 pb-2">
					<div class="table-responsive p-0">
						<table id="tblContributor" class="table table-striped" style="width:100%">
							<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Position</th>
										<th>Image</th>
										<th>Redirect Url</th>
										<th>Created At</th>
										<th>Actions</th>
									</tr>
							</thead>
							<tbody>
								@foreach ($contributors as $contributor)
									<tr>
										<td>{{ $contributor->id }}</td>
										<td>{{ $contributor->name }}</td>
										<td>{{ $contributor->position }}</td>
										<td>{{ $contributor->image }}</td>
										<td>{{ $contributor->redirect_url }}</td>
										<td>{{ $contributor->created_at }}</td>
										<td class="d-flex">
											<form method="POST" action="{{ route('contributors.delete', $contributor->id) }}">
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
		var table = $('#tblContributor').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'csv', 'excel', 'pdf'
			]
		});
	});
</script>
@endsection