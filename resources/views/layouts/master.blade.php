<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Recipe">
    <!-- Chrome, Firefox OS, Opera and Vivaldi -->
    <meta name="theme-color" content="#ff514a">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#ff514a">
    <meta name="keywords" content="recipes food, recipes , sushi, chinese, italian food"> 
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ff514a">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="canonical" href="{{url()->current()}}" />
    <meta property="fb:app_id" content="501698263332000" />
    <meta name="description" content="Click để xem chi tiết!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:title" content="{{ $siteTitle or 'Recipe' }}" />
    <meta property="og:description" content="Click để xem chi tiết!" />
    <meta property="og:image" content="{{ $siteImage or 'https://laravel.com/favicon.png'}}"/>
    <meta property="og:image:width" content="1440"/>
    <meta property="og:image:height" content="720"/>

    <title>{{ $siteTitle or 'Recipe' }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("/images/favicon.png") }}" />

    <link rel="stylesheet" href="{{ asset("/style.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/responsive.css") }}">
    <!-- Stylesheets Core Library-->
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">

    @yield('header')

  </head>
  <body class="sticky">
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    <!-- Preload spinner -->
    <div id="loader-wrapper">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div><!-- End Preload spinner -->

    <!--Wrapper-->
    <div id="wrap">

      <!--Navigation-->
      @include('common.header')
      <!--END Navigation-->

      <!--My Content-->
      @yield('content')
      <!--End My Content -->

      <!--Footer section-->
      @include('common.footer')
      <!--Footer  section-->
    </div><!-- ./wrapper -->

    <div class="go-up"><i class="fa fa-chevron-up"></i></div>

    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/js/jquery-ui-1.10.3.custom.min.js") }}"></script>
    <script src="{{ asset("/js/jquery.easing.1.3.min.js") }}"></script>
    <script src="{{ asset("/js/jquery.nicescroll.min.js") }}"></script>
    <script src="{{ asset("/js/jquery.scrollTo.js") }}"></script>
    <script src="{{ asset("/js/ResizeSensor.min.js") }}"></script>
    <script src="{{ asset("/js/theia-sticky-sidebar.min.js") }}"></script>
    <script src="{{ asset("/js/parallax.min.js") }}"></script>
    <script src="{{ asset("/js/jquery.themepunch.plugins.min.js") }}"></script>
    <script src="{{ asset("/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script src="{{ asset("/js/ion.rangeSlider.min.js") }}"></script>
    <script src="{{ asset("/js/imagesloaded.pkgd.min.js") }}"></script>
    <script src="{{ asset("/js/custom.js") }}"></script>

    @yield('script')
    
  </body>
</html>