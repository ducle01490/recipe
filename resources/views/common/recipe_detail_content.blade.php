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
                <iframe width="560" height="315" src="{{$recipe->video}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div><!-- End container -->


  <div class="modal fade" id="modal-buy">
    <div class="modal-dialog">
      <form method='post' action='' enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Đặt hàng: </h4>
        </div>
        <div class="modal-body">
            <div class="form-login">
          <form role="form">
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

              </div>
              <!-- /.box-body -->
            </form>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
          <input type="button" class="btn btn-primary" id="upload" value="Đặt hàng"></input>
        </div>
      </div>
      </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
</section>