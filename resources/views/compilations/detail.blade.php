@extends('layouts.master')

@section('header')

@if($compilation->video)
    @if(strpos($compilation->video, 'youtube') !== false)
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    @else
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    @endif
@endif

<script async src="https://cdn.ampproject.org/v0.js"></script>
@endsection

@section('content')

<div class="white_bg">
<div class="container margin_60 compilation">
    <div class="row row-tomorow flexthis xs-flex-column md-flex-row">
        <div class="col-md-7 col-sm-6 col-xs-12 xs-flex-column xs-flex-justify-center">
            <div class="recipe-order-title">
                @if(is_null($compilation))
                <h1 class="plan_title">Chưa có thông tin thực đơn!</h1>
                @else
                <h1 class="plan_title">{{$compilation->title}}</h1>
                @endif
            </div>
        </div>
        @if(!is_null($compilation))
        <div class="col-md-5 col-sm-6 col-xs-12">
            @if($compilation->video)
                <div class="video-player">
                    @if(strpos($compilation->video, 'youtube') !== false)
                    <?php 
                    preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $compilation->video, $matches);
                    $videoId = $matches[1];
                    ?>

                  <amp-youtube id="myVideo" width="480" height="270"
                               layout="responsive"
                               data-videoid="{{$videoId}}"
                               autoplay>
                    </amp-youtube>
                    @else
                    <amp-video id="myVideo" controls
                  width="1" height="1" layout="responsive"
                  src="{{$compilation->video}}">
                    </amp-video>
                      
                    @endif

                  <div id="myOverlay" class="click-to-play-overlay">

                    <div class="play-icon"
                    role="button" tabindex="0"
                    on="tap:myOverlay.hide, myVideo.play">
                    </div>

                        <amp-img class="poster-image"
                        layout="fill"
                        src="{{$compilation->thumb}}">
                    </amp-img>
                    </div>

                </div>
            @else
                <div class="photo photo-top">
                        <amp-img src="{{$compilation->thumb}}"
                              width="100"
                              height="100"
                              layout="responsive"
                              alt="{{$compilation->title}}"></amp-img>
                    </div>
            @endif
        </div>
        @endif
    </div>

    @if(count($recipes) > 0)
    <div class="text-sub-info" style="display: inline-block; font-weight: 800; color: #000;">
        <div style="background-color: #fe0; padding: 0.5em; margin-bottom: 0.7em; margin-top: 1em;"><span>IN THIS VIDEO</span></div>
    </div>
    <div class="row flexthis row-new-recipe recipes">
        @foreach($recipes as $recipe)
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="col-new-recipe">
                <?php $detailUrl = Helper::toURI($recipe->title.'-'.$recipe->id, '-'); ?>
                <a href="{{ route("recipe_detail", $detailUrl) }}">
                    <div class="menu-img" style="border-radius:3px;">
                        <amp-img src="{{$recipe->thumb}}"
                              width="100"
                              height="100"
                              layout="responsive"
                              alt="{{$recipe->title}}"></amp-img>
                    </div>
                </a>
                <div class="recipe-title">
                    <h3><a href="{{ route("recipe_detail", $detailUrl) }}">{{$recipe->title}}</a></h3>
                </div>
            </div>
        </div>
        @endforeach
    </div><!-- End row -->
    @endif
</div>
</div>

@endsection