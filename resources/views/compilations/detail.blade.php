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
<style type="text/css">
    .text-red {
        color: #f43192;
    }
    .menu-item .photo img {
    width: 100%;
    transition: all .5s ease;
    transform: scale(1, 1)
}

.menu-item:hover img {
    transform: scale(1.2, 1.2);
    transition: all .5s ease
}

.menu-item .image-fader {
    position: absolute;
    left: 10px;
    background-color: rgba(0, 0, 0, .3);
    border-radius: 0;
    opacity: 0;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    -webkit-transform: scale(.4) rotate(50deg);
    -moz-transform: scale(.4) rotate(50deg);
    -ms-transform: scale(.4) rotate(50deg);
    -o-transform: scale(.4) rotate(50deg)
}

.menu-item:hover .image-fader {
    opacity: 1;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0)
}
.menu-item .menu-title {
    text-align: left;
}

/* Wrapper that hosts the video and the overlay */
.video-player {
  position: relative;
  overflow: hidden;
}
/* Overlay fills the parent and sits on top of the video */
.click-to-play-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.poster-image {
  position: absolute;
  z-index: 1;
}
.poster-image img {
  object-fit: cover;
}
.video-title {
  position: absolute;
  z-index: 2;
  /* Align to the top left */
  top: 0;
  left: 0;
  font-size: 1.3em;
  background-color: rgba(0,0,0,0.8);
  color: #fafafa;
  padding: 0.5rem;
  margin: 0px;
}
.play-icon {
  position: absolute;
  z-index: 2;
  width: 100px;
  height: 100px;
  background-image: url(/images/play-icon.png);
  background-repeat: no-repeat;
  background-size: 100% 100%;
  /* Align to the middle */
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  cursor: pointer;
  opacity: 0.9;
}
.play-icon:hover, .play-icon:focus {
  opacity: 1;
}

@media screen and (min-width: 1200px) {

.row-tomorow {
    -ms-flex-align: center;
    align-items: center;

        display: -ms-flexbox;
    display: flex;
}

.row-tomorow .plan_title {
    padding: 10px;
    font-weight: 800;
}

.recipe-order-title .plan_time {
    background: #fe0;
}

.recipe-order-title {
    padding-bottom: 40px;
}
}

</style>

<div class="container margin_60">
    <div class="row row-tomorow">
        <div class="col-md-7 col-sm-6 col-xs-12">
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
                <div class="photo">
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
    <div class="text-red">
        <h5>IN THIS VIDEO</h5>
    </div>
    <div class="row flexthis plan_dish">
        @foreach($recipes as $recipe)
        <div class="col-md-3 col-sm-6 col-xs-6 menu-col-item">
            <div>
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
                <div class="menu-content" style="padding: 0px 0px 10px 0px;">
                    <h3 class="menu-title"><a href="{{ route("recipe_detail", $detailUrl) }}">{{$recipe->title}}</a></h3>
                </div>
            </div>
        </div>
        @endforeach
    </div><!-- End row -->
    @endif
</div>


@endsection