@extends('layouts.master')

@section('content')
	
  <!--SlideShow-->
  @include('common.home.slideshow')
  <!--END SlideShow-->

  <link rel="stylesheet" href="{{ asset('/blueapron.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">

  @include('common.home.discover')

  @include('common.home.checklist')

  @include('common.home.benefit')

  @include('common.home.instagram')

  @include('common.home.homePageSection')
  
      
@endsection

@section("script")

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script type="text/javascript">
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