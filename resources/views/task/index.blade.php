@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Task List</div>
		<table class="table table-hover">

		@foreach($tasks as $task)
			@can('owner', $task)
				<tr>
					<th>{{$task->name}}</th>
					<th>

					{!! Form::open(['action'=>['TaskController@destroy', $task->id], 'method'=>'DELETE', 'class'=>'form-linline']) !!}
					<a class="btn btn-success" href="{{action('TaskController@edit', $task->id)}}">Edit</a>

					<button type="submit" class="btn btn-danger">Eliminar</button>
					{!! Form::close()!!}
					</th>
				</tr>
			@endcan
		@endforeach

		</table>

	</div>

@endsection