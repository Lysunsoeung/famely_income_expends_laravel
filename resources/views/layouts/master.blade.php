
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="/logo.png" type="image/x-icon">

  @include('partials.inc_top')
  <style>
    body{
        font-family: 'Battambang', cursive;
        font-family: 'Chenla', cursive;
        font-family: 'Hanuman', serif;
        /* font-family: 'Kdam Thmor Pro', sans-serif; */
    }
  </style>


</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
    @include('partials.header')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    @yield('content')


  <!-- /.content-wrapper -->



  <footer class="main-footer">
    <strong>{{trans('test.Copyright')}} &copy; {{trans('test.2023')}} <a href="https://github.com/Lysunsoeung/famely_income_expends_laravel">{{trans('test.Team:')}}</a>.</strong>
    {{trans('test.All rights reserved.')}}
    <div class="float-right d-none d-sm-inline-block">
      <b>{{trans('test.Version')}}</b> {{trans('test.Testing')}}
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



@include('partials.inc_bottom')

</body>
</html>

