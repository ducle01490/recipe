<div class="container margin_60">
    <div class="row">
        <div class="single-product" style="margin-bottom: 0px;">
            <div class="col-md-3">
                <div class="single-product-image">
                    <img src="{{$recipe->thumb}}" alt="">
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-summary">
                    <h3 class="product-title">{{$recipe->title}}</h3>
                    <div class="price">
                        Giá nguyên liệu: <span class="product-amount">{{number_format($recipe->price, 0, ',', '.')}} VNĐ</span>
                    </div>
                    <div class="form-single-product">
                        <button type="button" class="single-add-to-cart-button"><i class="icon_cart_alt"></i> Mua ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="divider" style="margin-bottom: 10px; margin-top: 10px;" />
    <div class="row recipe_detail">
        <div class="col-md-7">
        	<div class="row">
        		<div class="col-md-4">
        			<h3>Nguyên liệu</h3>
        			<h4>for 12 servings</h4>
        			<div class="ul_list">
                        {!!$recipe->ingredient!!}
                    </div>
        		</div>
        		<div class="col-md-8">
        			<h3>Tiến hành</h3>
        			<div class="ul_list_default">
                        {!!$recipe->preparation!!}
                    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-5">
            <h3>Video hướng dẫn</h3>
            <div class="video_embed post-img">
                <iframe height="500" src="{{$recipe->video}}"></iframe>
            </div>
        </div>
    </div>
</div><!-- End container -->