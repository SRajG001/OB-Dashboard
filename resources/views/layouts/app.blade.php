<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OB-Dashboard</title>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    <!-- jQuery 3 -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="/dist/js/dropzone.js"></script>
</head>
<body>
    @include('layouts.header')
    @yield('main-content')
    @include('layouts.footer')
    @yield('page-script')
    
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- Sparkline -->
    <script src="/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap  -->
    <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll -->
    <script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS -->
    <script src="/bower_components/chart.js/Chart.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="/dist/js/pages/dashboard2.js"></script> --}}
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
</body>
</html>