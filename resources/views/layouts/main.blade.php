<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semen Indonesia</title>

    <!-- Favicons -->
    <link href="/assets/img/logo.png" rel="icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/admin/dist/css/adminlte.min.css">

    <!-- Page Plugin Scripts -->
    @stack('links')

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('partials.auth.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('partials.auth.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pt-3">            
            @yield('content')            
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('partials.auth.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/assets/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/admin/dist/js/adminlte.min.js"></script>
    <!-- Page Plugin Scripts -->
    @stack('scripts')
</body>

</html>
