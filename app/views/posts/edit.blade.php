@extends('layouts.master')

@section('content')


		{{ Form::model($post, [ 'action' => ['PostsController@update', $post->id], 'method' => 'PUT' ]) }}
            
            {{ Form::token() }}

            <p>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>

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

