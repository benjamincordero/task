@extends('layouts.app')

@section('content')

<div class="col-md-6">
	<div class="panel panel-default">

		<div class="panel-heading">Create Task</div>

		<div class="panel-body">
			{!!Form::open(['action'=>'TaskController@store', 'method'=>'POST', 'class'=>'form-inline'])!!}
			@include('task.elements.form')		
		</div>
	</div>
</div>
@endsection