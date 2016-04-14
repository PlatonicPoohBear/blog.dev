@extends('layouts.master')

@section('content')

	<p>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>

	<h2>{{{ $post->title }}}</h2>

	<h3>{{{ $post->body }}}</h3>




@stop