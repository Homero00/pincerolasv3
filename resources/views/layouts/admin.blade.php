<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pincerolas ADMIN') }}</title>

    <!-- Scripts -->
 
     <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('admin/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">

</head>
<body class="g-sidenav-show  bg-gray-200">



<div class="wrapper">
    @include('layouts.inc.sidebar')
    <div class="main-panel">
    @include('layouts.inc.adminnav')

        <div class="content">
        @yield('content')
        <br>
<div>
    <center>
        <H1>Bienvenido</H1>
</center>
</div>

        </div>
        @include('layouts.inc.adminfooter')
    </div>

</div>



  
<script src="{{ asset('public/admin/js/popper.min.js') }}" defer></script>
<script src="{{ asset('public/admin/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('public/admin/js/perfect-scrollbar.min.js') }}" defer></script>
<script src="{{ asset('public/admin/js/smooth-scrollbar.min.js') }}" defer></script>
<script src="{{ asset('public/admin/js/chartjs.min.js') }}" defer></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session('status'))
<script>
    swal("{{ session('status') }}");
</script>
@endif

@yield('scripts')

</body>
</html>
