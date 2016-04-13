@extends('layouts.master')

@section('content')

	<form method='post' action={{{ action('PostsController@store')	}}}>

		<input type='text' name='title' value={{{ Input::old('title') }}}>
		<input type='text' name='body' value={{{ Input::old('body') }}}>
		<input type='submit' value='Save'>

	</form>




@stop