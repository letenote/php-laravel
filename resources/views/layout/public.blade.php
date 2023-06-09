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
{{--@include('components.public.navbar')--}}
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
    <main>
        @yield('content')
    </main>
</body>
</html>
