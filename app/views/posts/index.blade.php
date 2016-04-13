@extends('layouts.master')

@section('content')

	@foreach ($posts as $key => $value)

		<h2>{{{ $value->title }}}</h2>

		<h3>{{{ $value->body }}}</h3>

	@endforeach




@stop