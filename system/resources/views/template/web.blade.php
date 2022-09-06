<!doctype html>
<html lang="en">

  <head>
    <title>Trips &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public/web')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url('public/web')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/web')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{url('public/web')}}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{url('public/web')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('public/web')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('public/web')}}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{url('public/web')}}/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('public/web')}}/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      @include('layout.web.header')

    @yield('content')

    @include('layout.web.footer')

    </div>

    <script src="{{url('public/web')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public/web')}}/js/jquery-migrate-3.0.0.js"></script>
    <script src="{{url('public/web')}}/js/popper.min.js"></script>
    <script src="{{url('public/web')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public/web')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('public/web')}}/js/jquery.sticky.js"></script>
    <script src="{{url('public/web')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{url('public/web')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{url('public/web')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{url('public/web')}}/js/jquery.stellar.min.js"></script>
    <script src="{{url('public/web')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{url('public/web')}}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{url('public/web')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{url('public/web')}}/js/aos.js"></script>

    <script src="{{url('public/web')}}/js/main.js"></script>

  </body>

</html>

