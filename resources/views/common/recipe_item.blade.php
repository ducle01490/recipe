<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="images/content/header-bg.jpg" data-natural-width="1400" data-natural-height="300">
    <div id="sub_header">
        <div class="container" id="sub_content">
            <div class="row">
                <div class="col-md-12">
                    <h1>Công thức</h1>
                    <div class="bread-crums">
                        <a href="#">Trang chủ</a>
                        <span class="bread-crums-span">»</span>
                        <span class="current">Công thức</span>
                    </div><!-- End bread-crums -->
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div>
</section>

<div class="white_bg">
    <div class="container margin_60">
        <div class="row row-new-recipe">
            @foreach($recipes as $recipe)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="col-new-recipe">
                    <a href="{{route("recipe_detail", $recipe->id)}}">
                        <div class="photo"><img src="{{$recipe->thumb}}" alt=""></div>
                    </a>
                    <div class="recipe-title">
                        <h3><a href="{{route("recipe_detail", $recipe->id)}}">{{$recipe->title}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <div class="text-center">
                    <a class="button-more" href="#">Xem thêm thực đơn</a>
                </div>
            </div>
        </div>
    </div><!-- End container -->
</div>