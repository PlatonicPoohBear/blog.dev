@extends('layouts.master')

@section('content')


		{{ Form::open(array('action' => 'PostsController@store', 'method' => 'POST')) }}

		{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		
		@if ($errors->has('title'))
			<p>{{{ $errors->first('title') }}}</p>
		@endif
		
		{{ Form::label('body', 'Body') }}
		{{ Form::text('body') }}
		
		@if ($errors->has('body'))
			<p>{{{ $errors->first('body') }}}</p>
		@endif
		
		{{ Form::submit('Save') }}

		{{ Form::close() }}




@stop