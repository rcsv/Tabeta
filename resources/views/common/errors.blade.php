@if ( count($errors) > 0 )
	<div class="alert alert-danger">
		<div><strong>Please input correct data</strong></div>
		<ul>
		@foreach ( $errors->all() as $error )
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif
