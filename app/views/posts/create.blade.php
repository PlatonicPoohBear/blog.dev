@extends('layouts.master')

@section('content')

	<form method='post' action={{{ action('PostsController@store')	}}}>

		<input type='text' name='title' value={{{ Input::old('title') }}}>
		<input type='text' name='content' value={{{ Input::old('content') }}}>
		<input type='submit' value='Save'>

	</form>




@stop