@extends('layouts.master')

@section('content')

	@foreach ($posts as $key => $value)

		<p>{{{ $value->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>

		<h2>{{{ $value->title }}}</h2>

		<h3>{{{ $value->body }}}</h3>

		<p>{{{ $value->user->email }}}</p>

	@endforeach

	{{ $posts->links() }}


@stop