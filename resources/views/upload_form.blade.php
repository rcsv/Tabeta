@extends('layouts.app')

@section('content')
<!-- Book application top page: start -->
<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">image upload</div>
		<div class="panel-body">

		@include('common.errors')

			<form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}

				Name <input type="text" name="name" />
				Image <br />
				<input type="file" name="photos[]" multiple />
				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus-square" aria-hidden="true"></i> Save
				</button>
			</form>
		</div>
	</div>
</div>
<!-- Book application top page: end   -->

@endsection
