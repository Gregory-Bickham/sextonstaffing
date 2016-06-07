@extends('layouts.master')

@section('content')

 	{{ Form::open(array('action' => 'PostsController@update')) }}
 	
	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null, ['placeholder' => 'Title']) }}
	</div>

	<div class="form-group">
		{{ Form::label('body', 'Body ') }}
		{{ Form::textarea('body', null, ['placeholder' => 'Body ']) }}
	</div>

	{{ Form::submit('Submit', ['class' => 'btn btn-default']) }}

	{{ Form::close() }}

@stop