@extends('..._master')

@section('title')
  Dashboard - ParkAdvisor
@stop

@section('content')
  <h1>Welcome "{{ Auth::user()->username }}" to your Dashboard!</h1>


  <hr>
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