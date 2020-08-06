<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SOPTEC - @yield('title')</title>

  <script src="{{url('/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="https://kit.fontawesome.com/af20ca372c.js" crossorigin="anonymous"></script>
  <script src="{{url('/js/sb-admin-2.js')}}"></script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{url('/css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{url('/css/connect.css?v='.time())}}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    @section('content')
    @show
</body>

</html>
