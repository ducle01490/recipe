@extends('layouts.master')

@section('header')
@if(strpos($recipe->video, 'youtube') !== false)
<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
@else
<script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
@endif
<script async src="https://cdn.ampproject.org/v0.js"></script>
@endsection

@section('content')

<style type="text/css">
.facebook.fb-share {
    color: #fff;
    background-color: #3b5998;
    border-color: rgba(0,0,0,0.2);
    padding: 8px;
}
.product-title {
    font-weight: 800;
    text-align: center;
    color: #222;
}

#product_social_share p {
    font-size: 12px;
    color: #8c8c8c
}

#product_social_share ul li a,
.social_color ul li a i,
.social_color_hover ul li a i {
    line-height: 35px;
    font-size: 16px;
    width: 35px;
    height: 35px;
    display: block
}

#product_social_share ul {
    margin: 0;
    padding: 0 0 10px;
    text-align: center
}

#product_social_share ul li {
    display: inline-block;
    margin: 0 5px 10px
}

#product_social_share ul li a {
    color: #666;
    text-align: center;
    background-color: #f2f2f2;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%
}

#product_social_share ul li a:hover {
    background: #fff;
    color: #111
}

#product_social_share {
    text-align: center;
    padding-top: 8px;
    margin-top: 0;
    margin-bottom: 0
}

#product_social_share ul {
    margin: 0;
    padding: 0;
    text-align: center;
}

#product_social_share ul li {
    display: inline-block;
    margin: 0 5px 10px
}

#product_social_share ul li a {
    color: #666;
    text-align: center;
    background-color: #f2f2f2;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px
}

#product_social_share ul li a i {
    color: #fff;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%
    line-height: 35px;
    font-size: 16px;
    width: 35px;
    height: 35px;
    display: block;
    line-height: 35px;
}

#product_social_share ul li a i {
    background-color: #666
}

#product_social_share ul li a .fa-facebook {
    background-color: #3b5998
}

#product_social_share ul li a .fa-facebook:hover {
    background-color: #3b5998
}

#product_social_share ul li a .fa-google-plus {
    background-color: #DD4B39
}

#product_social_share ul li a .fa-google-plus:hover {
    background-color: #DD4B39
}

#product_social_share ul li a .fa-instagram {
    background-color: #517FA4
}

#product_social_share ul li a .fa-instagram:hover {
    background-color: #517FA4
}

.product-amount {
    color: red;
}
.price {
    width: 100%;
    font-size: 18px;
    text-align: center;
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
    .recipe_top {
        margin-bottom: 30px;
    }
}
</style>

<div class="container margin_60">
    <div class="row recipe_top">
        <div class="col-md-12">
            <div class="single-product" style="margin-bottom: 0px;">
                <h1 class="product-title">{{$recipe->title}}</h1>
                <div class="product-share">
                    <div id="product_social_share">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row recipe_detail">
        <div class="col-lg-5 col-md-5 col-sm-12 video-player-detail">
            <div class="video-player">
                @if(strpos($recipe->video, 'youtube') !== false)
                <?php 
                preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $recipe->video, $matches);
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
              src="{{$recipe->video}}">
                </amp-video>
                  
                @endif

              <div id="myOverlay" class="click-to-play-overlay">

                <div class="play-icon"
                role="button" tabindex="0"
                on="tap:myOverlay.hide, myVideo.play">
                </div>

                    <amp-img class="poster-image"
                    layout="fill"
                    src="{{$recipe->thumb}}">
                </amp-img>
                </div>

            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h3>Nguyên liệu</h3>
                    <h4>cho <b class="text-danger">{{$recipe->serving}}</b> phần ăn</h4>
                    <div class="ul_list">
                        {!!$recipe->ingredient!!}
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h3>Tiến hành</h3>
                    <div class="ul_list_default">
                        {!!$recipe->preparation!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="single-add-to-cart-button" data-toggle="modal" data-target="#modal-buy"><i class="icon_cart_alt"></i> Mua ngay
            </button>
        </div>
    </div>
</div><!-- End container -->


<div class="modal fade" id="modal-buy">
    <div class="modal-dialog">
        <form id="orderForm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Đặt hàng: {{$recipe->title}}</h4>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="productId" id="productId" value="{{$recipe->id}}"/>
                <div class="modal-body">
                    <div class="form-login">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="price">Giá: <span class="product-amount">{{number_format($recipe->price, 0, ',', '.')}} VNĐ</span></label>
                            </div>

                            <div class="form-group">
                                <label for="name">Tên</label>
                                <input type="text" class="form-control" id="name" placeholder="Tên" required="">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" placeholder="Địa chỉ" required="">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" placeholder="Số điện thoại" required="">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số lượng</label>
                                <input type="text" class="form-control" id="quantity" placeholder="Số lượng" required="" value="1">
                            </div>
                            <div class="form-group">
                                <label for="phone">Ghi chú</label>
                                <textarea cols="form-control" id="note" placeholder="Ghi chú (thời gian giao hàng...)" style="width: 100%;"></textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng
                    </button>
                    <input type="submit" class="btn btn-primary" id="upload" value="Đặt hàng"/>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':  {!! json_encode(csrf_token()) !!}
            }
        });

        $('#orderForm').on('submit', function(e) {
            e.preventDefault();

            var fName = $("#name").val();
            var fAddress = $("#address").val();
            var fPhone = $("#phone").val();
            var fQuantity = $("#quantity").val();
            var fNote = $("#note").val();
            var fProductId = $("#productId").val();

            var fData = {"name": fName, "address": fAddress, "phone": fPhone, "quantity": fQuantity, "note": fNote, "productId": fProductId, "type": 2};

            console.log(fData);

            $.ajax({
                url: "/orders/add",
                data: fData,
                type: "POST",
                dataType : "json",
                success: function( res ) {
                    if(res["status"] == "success") {
                        alert("Đặt hàng thành công! Cảm ơn quý khách. Chúng tôi sẽ liên lạc với quý khách sớm nhất có thể!");
                    } else {
                        alert(res["messages"]);
                    }
                },
                error: function( xhr, status, errorThrown ) {
                    console.log( "Sorry, there was a problem!" );
                }
            });
        });

        var popupSize = {
            width: 780,
            height: 550
        };

        $(".facebook.fb-share").click(function(e){
            console.log("vao day");
            var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

            var popup = window.open($(this).prop('href'), 'social',
              'width='+popupSize.width+',height='+popupSize.height+
              ',left='+verticalPos+',top='+horisontalPos+
              ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

            if (popup) {
              popup.focus();
              e.preventDefault();
          }
      });

    });
</script>
@endsection