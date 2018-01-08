@extends('layouts.master')

@section('content')
	
  <!--SlideShow-->
  @include('common.slideshow')
  <!--END SlideShow-->

  <link rel="stylesheet" href="{{ asset("/blueapron.css") }}">
  @include('common.discover')

  @include('common.checklist')

  @include('common.benefit')

  @include('common.instagram')

  @include('common.homePageSection')
  
  
      
@endsection