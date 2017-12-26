@extends('layouts.master')

@section('content')
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="images/content/header-bg.jpg" data-natural-width="1400" data-natural-height="300">
    <div id="sub_header">
        <div class="container" id="sub_content">
            <div class="row">
                <div class="col-md-12">
                    <h1>Lorem ipsum dolor sit amet</h1>
                    <div class="bread-crums">
                        <a href="#">Trang chủ</a>
                        <span class="bread-crums-span">»</span>
                        <span>Công thức</span>
                        <span class="bread-crums-span">»</span>
                        <span class="current">Lorem ipsum dolor sit amet</span>
                    </div><!-- End bread-crums -->
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div>
</section>

<div class="container margin_60">
    <div class="row recipe_detail">
        <div class="col-md-7">
            <h3>Hoa quả nhập khẩu - thực đơn cho 2 người</h3>
            <div class="ul_list">
                <ul>
                    <li>1/3 cup (80ml) milk</li>
                    <li>1 red onion, thinly sliced</li>
                    <li>1 cup mint leaves, coarsely shredded</li>
                    <li>2 tablespoons pine nuts, toasted</li>
                    <li>2 tablespoons fresh chives, chopped</li>
                    <li>2 tablespoons fresh mint, chopped</li>
                    <li>1 teaspoon lemon zest</li>
                </ul>
            </div>
        </div>
        <div class="col-md-5">
            <div class="video_embed post-img">
                <iframe height="500" src="http://www.youtube.com/embed/JuyB7NO0EYY"></iframe>
            </div>
        </div>
    </div>
</div><!-- End container -->
@endsection