@extends('layouts.master')

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

@media screen and (min-width: 1200px) {

.row-tomorow {
    -ms-flex-align: center;
    align-items: center;

        display: -ms-flexbox;
    display: flex;
}

.row-tomorow .plan_title {
    padding: 10px;
    background: #fe0;
}

.recipe-order-title .plan_time {
    background: #fe0;
}

.recipe-order-title {
    padding-bottom: 40px;
}
}

</style>

<script async src="https://cdn.ampproject.org/v0.js"></script>

<div class="container margin_60">
    <div class="row row-tomorow">
        <div class="col-md-7 col-sm-6 col-xs-12">
            <div class="recipe-order-title">
                <div class="plan_time">Ngày mai: {{$tomorrow}} sẽ có: </div>
                @if(is_null($tomorowMenu))
                <h1 class="plan_title">Chưa có thông tin thực đơn!</h1>
                @else
                <?php $detailUrl = Helper::toURI($tomorowMenu->title.'-'.$tomorowMenu->id, '-'); ?>
                <h1 class="plan_title"><a href="{{ route("plan_detail", $detailUrl) }}">{{$tomorowMenu->title}}</a></h1>
                @endif
            </div>
        </div>
        @if(!is_null($tomorowMenu))
        <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="col-new-recipe">
                <?php $detailUrl = Helper::toURI($tomorowMenu->title.'-'.$tomorowMenu->id, '-'); ?>
                <a href="{{ route("plan_detail", $detailUrl) }}">
                    <div class="photo">
                        <amp-img src="{{$tomorowMenu->thumb}}"
                              width="100"
                              height="100"
                              layout="responsive"
                              alt="{{$tomorowMenu->title}}"></amp-img>
                    </div>
                </a>
            </div>
        </div>
        @endif
    </div>

    <div class="text-red">
        <h5>THỰC ĐƠN CÁC NGÀY GẦN ĐÂY</h5>
    </div>
    <div class="row plan_dish">
        @foreach($sevenMenus as $menu)
        <div class="col-md-3 col-sm-6 col-xs-6 menu-col-item">
            <div class="menu-item text-left">
                <?php $detailUrl1 = Helper::toURI($menu->title.'-'.$menu->id, '-'); ?>
                <a href="{{ route("plan_detail", $detailUrl) }}">
                    <div class="menu-img">
                        <amp-img src="{{$menu->thumb}}"
                              width="100"
                              height="100"
                              layout="responsive"
                              alt="{{$menu->title}}"></amp-img>
                    </div>
                </a>
                <div class="menu-content">
                    <h3 class="menu-title"><a href="{{ route("plan_detail", $detailUrl1) }}">{{$menu->title}}</a></h3>
                    <div class="plan_item_bottom">
                        <span class="plan_time">Ngày: {{ (new Carbon\Carbon($menu->publishDate))->format('d/m/Y')}}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div><!-- End row -->
</div>


@endsection