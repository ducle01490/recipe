@extends('layouts.master')

@section('content')

<script async src="https://cdn.ampproject.org/v0.js"></script>

<div class="white_bg">
<div class="container margin_60 menus">
    <div class="row recipe_top">
        <div class="col-md-12">
            <div class="single-product text-center" style="margin-bottom: 0px;">
                <h1 class="product-title">Start Planning for Great at Dinnertime</h1>
            </div>
        </div>
    </div>


    <div class="row row-tomorow flexthis xs-flex-column md-flex-row">
        <div class="col-md-7 col-sm-6 col-xs-12 xs-flex-column xs-flex-justify-center">
            <div class="recipe-order-title">
                <div class="plan_time">What's for Dinner Tomorrow? </div>
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
                    <div class="photo photo-top">
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

    @if(count($sevenMenus) > 0)
    <div class="row row-sub-info">
        <div class="col-sm-12">
            <div class="text-sub-info" style="display: inline-block; font-weight: 800; color: #000;">
                <div style="background-color: #fe0; padding: 0.5em; margin-bottom: 0.7em; margin-top: 1em;"><span>ON THE FOLLOWING DAYS</span></div>
            </div>
        </div>
    </div>
    <div class="row flexthis row-new-recipe recipes">
        @foreach($sevenMenus as $menu)
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="col-new-recipe">
                <?php $detailUrl1 = Helper::toURI($menu->title.'-'.$menu->id, '-'); ?>
                <a href="{{ route("plan_detail", $detailUrl1) }}">
                    <div class="menu-img">
                        <amp-img src="{{$menu->thumb}}"
                              width="100"
                              height="100"
                              layout="responsive"
                              alt="{{$menu->title}}"></amp-img>
                    </div>
                </a>
                <div class="recipe-title">
                    <h3 style="margin-bottom: 0px;"><a href="{{ route("plan_detail", $detailUrl1) }}">{{$menu->title}}</a></h3>
                    <div class="plan_item_bottom" style="padding-bottom: 16px;">
                        <span class="plan_time_item"">Available on {{ (new Carbon\Carbon($menu->publishDate))->format('d/m/Y')}}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div><!-- End row -->
    @endif
</div>
</div>

@endsection