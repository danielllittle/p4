@extends('..._master')

@section('heading')
<div>{{ HTML::linkAction('UserController@getLogout', 'Logout', array(), array('class' => 'logout')) }}
{{ HTML::linkAction('DashboardController@getIndex', 'Dashboard', array(), array('class' => 'dashboard')) }}</div>
@stop

@section('title')
Dashboard - ParkAdvisor
@stop

@section('content')
<h1>Welcome "{{ Auth::user()->username }}" to your Park Advisor Admin Dashboard!</h1>



        <br>
        <div class="container">
                   <div class="header column column-ride column-offset-2">Ride</div>
                   <div class="header column column-projected column-inset-1">Projected Time</div>
                   <div class="header column column-reported column-offset-1">Last Reported Time</div>

                   <div class="header column column-remove">Remove from Dashboard</div>
                </div>
@foreach ($allrides as $ride)
{{ Form::open(array('url' => 'ride/admin')) }}
<div class="container">
    <div class="column column-ride column-offset-2">
        {{$ride->name}}

    </div>
    <div class="column column-projected column-inset-1">{{ Form::text('projected', $ride->projected)}}</div>
    <div class="column column-reported column-offset-1">{{$ride->updated_at}}</div>

    <div class="column column-remove">

        {{ Form::hidden('rideid', $ride->id) }}
        {{Form::submit('Update');}}
        {{ Form::close() }}</div>

</div>
@endforeach
@stop
