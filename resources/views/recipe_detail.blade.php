@extends('layouts.master')

@section('content')

<style type="text/css">
	.facebook.fb-share {
		color: #fff;
    	background-color: #3b5998;
    	border-color: rgba(0,0,0,0.2);
    	padding: 8px;
	}
</style>

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
						<button type="button" class="single-add-to-cart-button" data-toggle="modal" data-target="#modal-buy"><i class="icon_cart_alt"></i> Mua ngay</button>
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
					<h4>cho <b class="text-danger">{{$recipe->serving}}</b> phần ăn</h4>
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
				<iframe width="560" height="315" src="{{$recipe->video}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php $detailUrl = Helper::toURI($recipe->title.'-'.$recipe->id, '-'); ?>
			<a class="facebook fb-share" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route("recipe_detail", $detailUrl)) }}"><i class="fa fa-facebook"></i>&nbsp;&nbsp;{{'Chia sẻ Facebook'}}</a>
		</div>
	</div>
</div><!-- End container -->


<div class="modal fade" id="modal-buy">
	<div class="modal-dialog">
		<form id="orderForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Đặt hàng: </h4>
					</div>
					{{ csrf_field() }}
					<input type="hidden" name="productId" id="productId" value="{{$recipe->id}}">
					<div class="modal-body">
						<div class="form-login">
							<div class="box-body">
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
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
						<input type="submit" class="btn btn-primary" id="upload" value="Đặt hàng"></input>
					</div>
				</div>
			</form>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
</section>

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

			var fData = {"name": fName, "address": fAddress, "phone": fPhone, "quantity": fQuantity, "note": fNote, "productId": fProductId, "type": 1};

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