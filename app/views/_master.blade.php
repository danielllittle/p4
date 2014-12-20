<!doctype html>
<html>
  <meta charset="utf-8">
  <title>
    @yield('title','ParkAdvisor - DWA15 - Project 4')
  </title>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css') }}">
<link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
</head>

<body>
  @if(Session::get('flash_message'))
      <div class='flash-message'>{{ Session::get('flash_message') }}</div>
  @endif
  <div class="nav">@yield('nav')</div>
  @yield('description')<hr>
  @yield('content')<hr>
  @yield('results')
</body>
</html>