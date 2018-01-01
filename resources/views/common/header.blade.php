<header class="sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-5 col-xs-6">
                <a href="index.html" id="logo">
                    <img src="{{ asset("images/logo.png") }}" alt="">
                </a>
            </div>
            <nav class="col-md-9 col-sm-7 col-xs-6">
                <a class="np-toggle-switch np-toggle-switch-nxp open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu" id="main-menu">
                    <div id="header_menu">
                        <img src="{{ asset("images/logo-menu.png") }}" alt="">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="{{ route('homepage') }}"><i class="icon_house_alt"></i> Trang chủ</a>
                        </li>
                        <!-- <li><a href="{{ route('plan_two') }}"><i class="ic icon-calendar-2"></i> Thực đơn theo ngày</a></li> -->
                        <li><a href="{{ route('recipes') }}"><i class="ic icon-recipes"></i> Công thức</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>