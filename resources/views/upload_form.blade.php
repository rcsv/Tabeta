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

				Name: 
				<input type="text" name="name" /> 

				<label for="photos">Image</label>
				<input
					id="photos" name="photos[]"	 
					type="file" class="file" 
					multiple
					data-show-upload="false"
					data-show-caption="true" />

				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus-square" aria-hidden="true"></i> Save
				</button>
			</form>
		</div>
	</div>
</div>
<!-- Book application top page: end   -->

@endsection
