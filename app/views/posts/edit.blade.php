@extends('layouts.master')

@section('content')


		{{ Form::model($post, [ 'action' => ['PostsController@update', $post->id], 'method' => 'PUT' ]) }}
            
            {{ Form::token() }}

			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null) }}
			
			@if ($errors->has('title'))
				<p>{{{ $errors->first('title') }}}</p>
			@endif
			
			{{ Form::label('body', 'Body') }}
			{{ Form::text('body', null) }}
			
			@if ($errors->has('body'))
				<p>{{{ $errors->first('body') }}}</p>
			@endif
			
			{{ Form::submit('Save') }}

		{{ Form::close() }}




@stop

