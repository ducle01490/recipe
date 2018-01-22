@extends('layouts.master')

@section('header')

  <link rel="stylesheet" href="{{ asset('/blueapron.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">

@endsection

@section('content')
	
  <!--SlideShow-->
  @include('common.home.slideshow')
  <!--END SlideShow-->

  

  @include('common.home.discover')

  @include('common.home.checklist')

  @include('common.home.benefit')

  @include('common.home.instagram')

  @include('common.home.homePageSection')
  
      
@endsection

@section("script")
<script src="{{ asset("/js/jquery.themepunch.plugins.min.js") }}"></script>
<script src="{{ asset("/js/jquery.themepunch.revolution.min.js") }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script type="text/javascript">
  ! function(e) {
    "use strict";
    jQuery(".tp-banner").length && jQuery(".tp-banner").revolution({
        delay: 5e3,
        startwidth: 1170,
        startheight: 700,
        hideThumbs: 10,
        fullWidth: "off",
        fullScreen: "off"
    }), jQuery(".tp-banner-2").length && jQuery(".tp-banner-2").revolution({
        delay: 5e3,
        startwidth: 1170,
        startheight: 500,
        hideThumbs: 10,
        fullWidth: "off",
        fullScreen: "off"
    });

}(jQuery);

  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      nav : true, // Show next and prev buttons
      autoplay: true,
      navText:["",""],
      dots: true,
      lazyLoad:true,
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false
 
    });
  });
</script>

@endsection