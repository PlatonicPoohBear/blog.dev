@extends('layouts.master')


@section('content')
    
    <div class="container">

        <h1>Log In</h1>

        {{ Form::open(['action' => 'HomeController@postLogin']) }}

            {{ Form::label('email', 'Email') }}
            {{ Form::text('email') }}

            {{ Form::label('password', 'Enter Password') }}
            {{ Form::password('password') }}

            {{ Form::submit('Log In') }}

        {{ Form::close() }}

    </div>

@stop