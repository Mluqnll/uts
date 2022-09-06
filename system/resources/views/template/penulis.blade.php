<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dashor - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{url('public')}}/images/favicon.ico">

        <link href="{{url('public')}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public')}}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{url('public')}}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{url('public')}}/plugins/metro/MetroJs.min.css">
        <link rel="stylesheet" href="{{url('public')}}/plugins/morris/morris.css">
        <link href="{{url('public')}}/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <link href="{{url('public')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{url('public')}}/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="{{url('public')}}/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{url('public')}}/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('layout.penulis.sidebar')
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    @include('layout.penulis.header')
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper">

                        @yield('content')<!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                @include('layout.penulis.footer')

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{url('public')}}/js/jquery.min.js"></script>
        <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public')}}/js/modernizr.min.js"></script>
        <script src="{{url('public')}}/js/detect.js"></script>
        <script src="{{url('public')}}/js/fastclick.js"></script>
        <script src="{{url('public')}}/js/jquery.slimscroll.js"></script>
        <script src="{{url('public')}}/js/jquery.blockUI.js"></script>
        <script src="{{url('public')}}/js/waves.js"></script>
        <script src="{{url('public')}}/js/jquery.nicescroll.js"></script>
        <script src="{{url('public')}}/js/jquery.scrollTo.min.js"></script>

        <script src="{{url('public')}}/plugins/metro/MetroJs.min.js"></script>
        <script src="{{url('public')}}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="{{url('public')}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="{{url('public')}}/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="{{url('public')}}/plugins/morris/morris.min.js"></script>
        <script src="{{url('public')}}/plugins/raphael/raphael-min.js"></script>
        <script src="{{url('public')}}/pages/dashboard.js"></script>

        <!-- Required datatable js -->
        <script src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{url('public')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{url('public')}}/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{url('public')}}/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{url('public')}}/plugins/datatables/jszip.min.js"></script>
        <script src="{{url('public')}}/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{url('public')}}/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{url('public')}}/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{url('public')}}/plugins/datatables/buttons.print.min.js"></script>
        <script src="{{url('public')}}/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="{{url('public')}}/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{url('public')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>
  
        <!-- Datatable init js -->
        <script src="{{url('public')}}/pages/datatables.init.js"></script>
        <!-- App js -->
        <script src="{{url('public')}}/js/app.js"></script>

    </body>
</html>