<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="colorlib" />
        <title>
            @yield('title', 'Bem-vindo(a) ao Admindek')
        </title>
        <link rel="icon" href="{{asset('vendor/admindek/assets/images/favicon.ico')}}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/admindek/bower_components/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/admindek/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/admindek/assets/icon/feather/css/feather.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/admindek/assets/css/font-awesome-n.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/admindek/bower_components/chartist/css/chartist.css')}}" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/admindek/assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/admindek/assets/css/widget.css')}}">
        @yield('master_css')
    </head>

    <body>
        <div class="loader-bg">
            <div class="loader-bar"></div>
        </div>
        <div id="pcoded" class="pcoded">
            @yield('body')
        </div>
        <!--Scripts JS-->
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('vendor/admindek/bower_components/jquery/js/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/bower_components/popper.js/js/popper.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/pages/waves/js/waves.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/pages/chart/float/jquery.flot.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/pages/chart/float/jquery.flot.categories.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/pages/chart/float/curvedLines.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/pages/chart/float/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/bower_components/chartist/js/chartist.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/pages/widget/amchart/amcharts.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/pages/widget/amchart/serial.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/pages/widget/amchart/light.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/js/pcoded.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/js/vertical/vertical-layout.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/js/script.min.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/js/jquery.mask.js')}}"></script>
        <script src="{{asset('vendor/admindek/assets/js/bootstrap-filestyle.js')}}"></script>
        @yield('master_js')

</html>
