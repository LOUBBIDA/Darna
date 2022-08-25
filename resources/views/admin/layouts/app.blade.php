<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa – PHP Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon"
        href="https://php.spruko.com/noa/noa/assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Noa – PHP Bootstrap 5 Admin & Dashboard Template </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- INTERNAL SWITCHER CSS -->
    <link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/switcher/demo.css') }}" rel="stylesheet" />
</head>

<body>
    @include('admin.layouts.top-bar')
    @include('admin.layouts.side-bar')
    <br>
    <br>
    <br>
    @yield('content')
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('assets/js/jquery.min.html') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.html') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.html') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.html') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll.html') }}"></script>

    <!-- STICKY JS -->
    <script src="{{ asset('assets/js/sticky.html') }}"></script>

    <!-- APEXCHART JS -->
    <script src="{{ asset('assets/js/apexcharts.html') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.html') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('assets/js/circle-progress.min.html') }}"></script>

    <!-- INTERNAL DATA-TABLES JS-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.html') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.html') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.html') }}"></script>

    <!-- INDEX JS -->
    <script src="{{ asset('assets/js/index1.html') }}"></script>

    <!-- REPLY JS -->
    <script src="{{ asset('assets/js/reply.html') }}"></script>


    <!-- COLOR THEME JS -->
    <script src="{{ asset('assets/js/themeColors.html') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.html') }}"></script>

    <!-- SWITCHER JS -->
    <script src="{{ asset('assets/switcher/js/switcher.html') }}"></script>
</body>

</html>
