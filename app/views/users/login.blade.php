@extends('layouts.master')

@section('content')

	{{ Form::open(array('action' => 'HomeController@doLogin', 'method' => 'POST')) }}
    <h1>Login</h1>

    <!-- if there are login errors, show them here -->
    <p>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
    </p>

    <p>
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', NULL, array('placeholder' => 'email@addy.com')) }}
    </p>

    <p>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
    </p>

    <p>{{ Form::submit('Submit!') }}</p>

    {{ Form::close() }}

@stop