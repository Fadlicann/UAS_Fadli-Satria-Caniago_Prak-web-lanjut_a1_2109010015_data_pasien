<!doctype html>
<html lang="en">

<head>
    <title>Rumah Sakit FadliSatria</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
</head>

<body style="background-color:  ; ">
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        @include('layouts.include._navbar')
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        @include('layouts.include._sidebar')

        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        @yield('content')
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid" style="background-color: ;">
                <p class="copyright" style="color: black;font-size: 18px;">FadliSatria~2109010015</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist/css/chartist-custom.css') }}"> --}}

    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/assets/scripts/klorofil-common.js') }}"></script>

</body>

</html>
