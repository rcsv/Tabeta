@extends('layouts.app')

@section('content')
<!-- Book application top page: start -->
<div class="panel-body">
	<!-- use for displaying validation error -->
	@include('common.errors')
	<!-- use for displaying validation error -->
	<!-- register form -->
	<form action="{{ url('book') }}" method="POST" class="form-horizontal">
		{{ csrf_field() }}

		<!-- book title -->
		<div class="form-group">
			<label for="book" class="col-sm-3 control-label">Book</label>
			<div class="col-sm-6">
				<input type="text" name="item_name" id="book-name" class="form-control">
			</div>
		</div>

		<!-- register button -->
		<div class="form-gruop">
			<div class="col-sm-offset-3 col-ms-6">
				<button type="submit" class="btn btn-default">
					<i class="glyphicon glyphicon-plus"></i> Save
				</button>
			</div>
		</div>
	</form>
</div>

<!-- Book application top page: end   -->
@endsection
