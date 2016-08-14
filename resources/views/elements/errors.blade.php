@if(count($errors)>0)

	<div class="alert alert-danger">
	 	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

		<ul class="list-unstyled text-center">
			@foreach($errors->all() as $e)

			<li>{{$e}}</li>

			@endforeach
		</ul>

	</div>

@endif