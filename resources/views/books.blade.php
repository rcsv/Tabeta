@extends('layouts.app')

@section('content')
<!-- Book application top page: start -->
<h2>Book Database</h2>
<div class="panel-body">
	<!-- use for displaying validation error -->
	@include('common.errors')
	<!-- use for displaying validation error -->
	<!-- register form -->
	<form action="{{ url('book') }}" method="POST" class="form-horizontal">
		{{ csrf_field() }}

		<!-- book title -->
		<div class="form-group">
			<label for="item_name" class="col-sm-3 control-label">Book Name</label>
			<div class="col-sm-6">
				<input type="text" name="item_name" id="book-name" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label for="item_number" class="col-sm-3 control-label">Number</label>
			<div class="col-sm-6">
				<input type="text" name="item_number" id="book-number" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label for="item_amount" class="col-sm-3 control-label">Price</label>
			<div class="col-sm-6">
				<input type="text" name="item_amount" id="book-amount" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label for="published" class="col-sm-3 control-label">Published Date</label>
			<div class="col-sm-6">
				<input type="datetime" name="published" id="book-published" class="form-control">
			</div>
		</div>

		<!-- register button -->
		<div class="form-gruop">
			<div class="col-sm-offset-3 col-ms-6">
				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus-square" aria-hidden="true"></i> Save
				</button>
			</div>
		</div>
	</form>
</div>

@if ( count( $books ) > 0 )
<div class="panel panel-default">

	<!-- book list -->
	<div class="panel-heading"> Current Books </div>
	<div class="panel-body">
		<table class="table table-striped task-table">
		<thead>
			<th>Book Name</th><th>&nbsp;</th>
		</thead>
		<tbody>
			@foreach ( $books as $book )
			<tr>
				<!-- book title -->
				<td class="table-text"><div>{{ $book->item_name }}</div></td>

				<!-- edit button for book -->
				<td>
					<form action="{{ url('bookedit/' . $book->id) }}" method="POST">
						{{ csrf_field() }}

						<button type="submit" class="btn btn-primary">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
						</button>
					</form>
				</td>

				<!-- delete button -->
				<td>
					<form action="{{ url('book/' . $book->id ) }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}

						<button type="submit" class="btn btn-danger">
							<i class="fa fa-trash" aria-hidden="true"></i> delete
						</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
		</table>

		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				{{ $books->links() }}
			</div>
		</div>
	</div>
</div>
@endif
<!-- Book application top page: end   -->
@endsection
