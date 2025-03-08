<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Ti Saju</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Place favicon.ico in the root directory -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/images/logo3.png"
    />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
  </head>

  <body>


    <!-- Preloader Start-->

    <div class="InitLoader">
      <div class="fingerprint-spinner">
        <div class="spinner-ring"></div>
        <div class="spinner-ring"></div>
        <div class="spinner-ring"></div>
        <div class="spinner-ring"></div>
        <div class="spinner-ring"></div>
        <div class="spinner-ring"></div>
        <div class="spinner-ring"></div>
        <div class="spinner-ring"></div>
        <div class="spinner-ring"></div>
      </div>
    </div>

    <!-- back href top start  -->
    <div class="progress-wrap">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
    <!-- back href top end -->

    <!-- Bg image start-->
    <div
      class="bg-img"
      style="background-image: url('assets/images/show/bg.png')"
    ></div>
    <!-- Bg image end-->

    <!-- header-area-start -->
   

    @include('components.header')

    <!-- header-area-end -->

    <!-- side bar start -->
    @include('components.sidenav')
    <!-- side bar end -->

    @yield('content')

    <!-- footer start -->
    @include('components.footer')
    <!-- footer end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/waypoints.js')}}"></script>
    <script src="{{ asset('assets/js/backtotop.js')}}"></script>
    <script src="{{ asset('assets/js/counterup.js')}}"></script>
    <script src="{{ asset('assets/js/ajax-form.js')}}"></script>
    <script src="{{ asset('assets/js/typer.js')}}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
  </body>
</html>
