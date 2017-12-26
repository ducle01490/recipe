@extends('layouts.master')

@section('content')
<div class="container margin_60">
    <div class="main_title">
        <h2 class="nomargin_top">Thực đơn theo ngày</h2>
        <p>Bữa cơm hôm nay gia đình bạn có bao nhiêu người? Vui lòng chọn số người bên dưới!</p>
        <div class="menu-plan-nav text-center">
            <a class="btn btn-active" href="{{ route("plan_two") }}">Thực đơn cho 2 người</a>
            <a class="btn btn-grey" href="{{ route("plan_family") }}">Thực đơn cho gia đình</a>
        </div>
        <hr class="divider">
    </div><!-- End main_title -->
    <div class="row">
        <div class="col-md-7 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="plan_time">Ngày mai: 12/12/2017 sẽ có: </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>Các loại rau củ quả theo mùa</h1>
                    <div class="ul_list_default">
                    <ol>
                       <li>Thăn bò Gia lai</li>
                       <li>Gà ta sạch </li> 
                        <li>Cá rô phi tự nhiên</li>
                        <li>Ba chỉ </li>
                        <li>Rau</li> 
                    </ol>
                    </div>
                    <a class="btn btn-success plan_order" data-toggle="modal" data-target="#modalOrder">Đặt mua ngay</a>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="col-new-recipe">
                <a href="{{route("recipe_detail", '1')}}">
                    <div class="photo"><img src="images/recipe/01.jpg" alt=""></div>
                </a>
            </div>
        </div>
        <hr class="divider">
    </div>

    <div class="text-center">
            <h3>Thực đơn các ngày gần đây</h3>
        </div>
    <div class="row plan_dish">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="menu-item" text-left>
                <div class="menu-img"><img src="images/recipe/01.jpg" alt=""></div>
                <div class="menu-content">
                    <h3><a href="{{ route("plan_detail") }}">Hoa quả nhập khẩu</a></h3>
                    <p>Táo Envy, Nho nhập khẩu, Kiwi vàng. Chiết khấu 10%, Miễn phí vận chuyển nội thành Hà Nội.</p>
                    <div class="plan_item_bottom">
                        <span class="plan_time">Ngày kia: 13/12/2016</span>
                        <a class="btn btn-success plan_order" data-toggle="modal" data-target="#modalOrder">Đặt mua</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="menu-item">
                <div class="menu-img"><img src="images/recipe/02.jpg" alt=""></div>
                <div class="menu-content">
                                        <h3><a href="{{ route("plan_detail") }}">Hải sản cao cấp</a></h3>
                    <p>Tôm Bắc Cực, Bạch Tuộc Ma Rốc, Cá tuyết Đan Mạch. Chiết khấu 10%, Miễn phí vận chuyển nội thành Hà Nội.</p>
                    <div class="plan_item_bottom">
                        <span class="plan_time">Ngày: 14/12/2016</span>
                        <a class="btn btn-success plan_order" data-toggle="modal" data-target="#modalOrder">Đặt mua</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="menu-item" text-left>
                <div class="menu-img"><img src="images/recipe/01.jpg" alt=""></div>
                <div class="menu-content">
                    <h3><a href="{{ route("plan_detail") }}">Hoa quả nhập khẩu</a></h3>
                    <p>Táo Envy, Nho nhập khẩu, Kiwi vàng. Chiết khấu 10%, Miễn phí vận chuyển nội thành Hà Nội.</p>
                    <div class="plan_item_bottom">
                        <span class="plan_time">Ngày: 15/12/2016</span>
                        <a class="btn btn-success plan_order" data-toggle="modal" data-target="#modalOrder">Đặt mua</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="menu-item">
                <div class="menu-img"><img src="images/recipe/02.jpg" alt=""></div>
                <div class="menu-content">
                                        <h3><a href="{{ route("plan_detail") }}">Hải sản cao cấp</a></h3>
                    <p>Tôm Bắc Cực, Bạch Tuộc Ma Rốc, Cá tuyết Đan Mạch. Chiết khấu 10%, Miễn phí vận chuyển nội thành Hà Nội.</p>
                    <div class="plan_item_bottom">
                        <span class="plan_time">Ngày: 16/12/2016</span>
                        <a class="btn btn-success plan_order" data-toggle="modal" data-target="#modalOrder">Đặt mua</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="menu-item" text-left>
                <div class="menu-img"><img src="images/recipe/01.jpg" alt=""></div>
                <div class="menu-content">
                    <h3><a href="{{ route("plan_detail") }}">Hoa quả nhập khẩu</a></h3>
                    <p>Táo Envy, Nho nhập khẩu, Kiwi vàng. Chiết khấu 10%, Miễn phí vận chuyển nội thành Hà Nội.</p>
                    <div class="plan_item_bottom">
                        <span class="plan_time">Ngày: 17/12/2016</span>
                        <a class="btn btn-success plan_order" data-toggle="modal" data-target="#modalOrder">Đặt mua</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="menu-item">
                <div class="menu-img"><img src="images/recipe/02.jpg" alt=""></div>
                <div class="menu-content">
                                        <h3><a href="{{ route("plan_detail") }}">Hải sản cao cấp</a></h3>
                    <p>Tôm Bắc Cực, Bạch Tuộc Ma Rốc, Cá tuyết Đan Mạch. Chiết khấu 10%, Miễn phí vận chuyển nội thành Hà Nội.</p>
                    <div class="plan_item_bottom">
                        <span class="plan_time">Ngày: 18/12/2016</span>
                        <a class="btn btn-success plan_order" data-toggle="modal" data-target="#modalOrder">Đặt mua</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End row -->   
</div>


<div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Đặt hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row clearfix">
            <div class="col-sm-4">
                <img src="images/recipe/02.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-sm-8">
                <h3 style="font-size: 20px;text-align: left">Hải sản cao cấp</h3>
                <h5 style="font-size: 18px;" class="text-warning">298,000đ</h5>
            </div>
        </div>
        <hr>
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tên của bạn là gì:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Số điện thoại của bạn:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Giao hàng đến:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary">Đặt mua</button>
      </div>
    </div>
  </div>
</div>


@endsection