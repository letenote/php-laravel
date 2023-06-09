<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel - @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte-v3')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempus dominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('adminlte-v3')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('adminlte-v3')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('adminlte-v3')}}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte-v3')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('adminlte-v3')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Date-range picker -->
    <link rel="stylesheet" href="{{asset('adminlte-v3')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('adminlte-v3')}}/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('custom-css')}}/app.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('adminlte-v3')}}/plugins/toastr/toastr.min.css">
</head>
<body class="antialiased">
@include('components.dashboard.navbar')
@include('components.dashboard.sidebar')
<!-- jQuery -->
<script src="{{asset('adminlte-v3')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte-v3')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="{{asset('adminlte-v3')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{asset('adminlte-v3')}}/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte-v3')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte-v3')}}/dist/js/demo.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminlte-v3')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte-v3')}}/dist/js/adminlte.js"></script>
<!-- jQuery Mapael -->
<script src="{{asset('adminlte-v3')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('adminlte-v3')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('adminlte-v3')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('adminlte-v3')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte-v3')}}/plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="{{asset('adminlte-v3')}}/dist/js/pages/dashboard2.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminlte-v3')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Sparkline -->
<script src="{{asset('adminlte-v3')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('adminlte-v3')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('adminlte-v3')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminlte-v3')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('adminlte-v3')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('adminlte-v3')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('adminlte-v3')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('adminlte-v3')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminlte-v3')}}/dist/js/pages/dashboard.js"></script>

<div class="content-wrapper">
    @if(isset($contentHeader))
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$contentHeader}}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    @endif
    @yield('content')
</div>
</body>
</html>
