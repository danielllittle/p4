@extends('..._master')

@section('title')
  Login - ParkAdvisor
@stop

@section('content')
  <h1>Login to ParkAdvisor!</h1>

  <hr>
  <?php foreach ($errors->all() as $error)
        {
            echo $error;
        } ?>
  <hr>
  @section('content')
    <br>
    {{ Form::open(array('url' => 'user/login', 'method' => 'post')) }}
    {{ Form::label('username', 'User Name') }}
    {{ Form::text('username',Input::get('username')) }} (max. 100)<br>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password')}}<br><br>
    {{ Form::submit('Submit') }}
    {{ Form::close() }}<br>
  @stop
  <hr>

@stop