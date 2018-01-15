@extends('layouts.master')

@section('content')
	
  <!--SlideShow-->
  @include('common.home.slideshow')
  <!--END SlideShow-->

  <link rel="stylesheet" href="{{ mix('css/blueapron.min.css') }}">
  @include('common.home.discover')

  @include('common.home.checklist')

  @include('common.home.benefit')

  @include('common.home.instagram')

  @include('common.home.homePageSection')
  
  
      
@endsection