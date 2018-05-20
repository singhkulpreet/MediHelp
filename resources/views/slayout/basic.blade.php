<!Doctype html>
<html>
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{url('boot/css/bootstrap.min.css')}}" />
    <script type="text/javascript" src="{{url('boot/js/jquery.js')}}" ></script>
    <script type="text/javascript" src="{{url('boot/js/bootstrap.min.js')}}" ></script>

<style>
@yield('style')
</style>
  </head>

<body>

@yield('main')
</body>
</html>
