@extends('layouts.app')

@section('content')
	{!!Form::model($task, ['action'=>['TaskController@update', $task], 'method'=>'PUT', 'class'=>'form-inline'])!!}
@include('task.elements.form')	

@endsection