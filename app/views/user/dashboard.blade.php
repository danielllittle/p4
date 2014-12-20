@extends('..._master')

@section('heading')
  <div>
  {{ HTML::linkAction('UserController@getLogout', 'Logout', array(), array('class' => 'logout')) }}
  {{ HTML::linkAction('RideController@getAdmin', 'Admin', array(), array('class' => 'admin')) }}
  @if(Auth::user()->isAdmin())
  @endif
  </div>
@stop

@section('title')
  Dashboard - ParkAdvisor
@stop

@section('content')
  <h1>Welcome "{{ Auth::user()->username }}" to your Park Advisor Dashboard!</h1>



        <br>
        <h2>You are currently watching {{count($myrides) }} rides.</h2>
        <br>
        <div class="container">
           <div class="header column column-ride column-offset-2">Ride</div>
           <div class="header column column-projected column-inset-1">Projected Time</div>
           <div class="header column column-reported column-offset-1">Last Reported Time</div>

           <div class="header column column-remove">Remove from Dashboard</div>
        </div>
        @foreach ($myrides as $ride)
        <div class="container">
           <div class="column column-ride column-offset-2">
           {{$ride->name}}

           </div>
           <div class="column column-projected column-inset-1">{{$ride->projected}}</div>
           <div class="column column-reported column-offset-1">{{$ride->updated_at}}</div>

           <div class="column column-remove">
           {{ Form::open(array('url' => 'user/remove')) }}
           {{ Form::hidden('rideid', $ride->id) }}
           {{Form::submit('Remove');}}
           {{ Form::close() }}</div>

        </div>
        @endforeach
<br>
<br>
<br>
<h2>Click on 'Add' to include more rides to your dashboard.</h2>

        <br>
        <div class="container">
             <div class="header column column-ride column-offset-2">Ride Name</div>

             <div class="header column column-remove">Add to Dashboard</div>
          </div>
          @foreach ($availableRides as $ride)
          <div class="container">
             <div class="column column-ride column-offset-2">{{$ride->name}}</div>


             <div class="column column-remove">
             {{ Form::open(array('url' => 'user/add')) }}
             {{ Form::hidden('rideid', $ride->id) }}
             {{Form::submit('Add');}}
             {{ Form::close() }}
             </div>
          </div>

          @endforeach


@stop