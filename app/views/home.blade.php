@extends('_master')

@section('title')
  Welcome - ParkAdvisor
@stop

@section('content')
  <h1>Welcome to ParkAdvisor!</h1>

  <hr>
  Park wait times are now available to everyone.   Have a better experience and avoid those long lines!
<h3> {{HTML::linkAction('UserController@getLogin', 'Login')}} to access wait times!</h3>

@stop