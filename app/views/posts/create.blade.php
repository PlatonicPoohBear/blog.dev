@extends('layouts.master')

@section('content')

	<form method='post' action={{{ action('PostsController@store')	}}}>

		<input type='text' name='title' value={{{ Input::old('title') }}}>
		
		@if ($errors->has('title'))
			<p>{{{ $errors->first('title') }}}</p>
		@endif
		
		<input type='text' name='body' value={{{ Input::old('body') }}}>
		
		@if ($errors->has('body'))
			<p>{{{ $errors->first('body') }}}</p>
		@endif
		
		<input type='submit' value='Save'>

	</form>




@stop