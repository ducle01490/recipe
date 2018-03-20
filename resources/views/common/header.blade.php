<style type="text/css">
    .main-menu-mobile {
        padding-top: 6px;
        width: 100%;
        text-align: right;
    }
    .main-menu-mobile ul {
        position: relative;
        padding: 0;
        margin: 0;
    }
    .main-menu-mobile li{
        display: inline-block;
    }
    .main-menu-mobile li a {
        color: #fff;
        padding: 8px;
        font-size: 15px;
        margin: 0;
        font-weight: 500;
    }

    @media only screen and (max-width:1200px){
        header.sticky #logo img {
            padding-top: 6px;
        }
    }

</style>

<header class="sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-4">
                <a href="{{route('homepage')}}" id="logo">
                    <img src="{{ asset("images/logo.png") }}" alt="">
                </a>
            </div>
            <nav class="col-md-10 col-sm-8 col-xs-8">
                <div class="main-menu-mobile hidden-md hidden-lg">
                    <ul>
                        <li><a href="{{ route('menu') }}"><i class="ic icon-calendar-2"></i> Thực đơn</a></li>
                        <li><a href="{{ route('recipes') }}"><i class="ic icon-recipes"></i> Công thức</a></li>
                    </ul>
                </div>


                <div class="main-menu" id="main-menu">
                    <div id="header_menu">
                        <img src="{{ asset("images/logo-menu.png") }}" alt="">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="{{ route('homepage') }}"><i class="icon_house_alt"></i> Trang chủ</a>
                        </li>
                        <li><a href="{{ route('menu') }}"><i class="ic icon-calendar-2"></i> Thực đơn</a></li>
                        <li><a href="{{ route('recipes') }}"><i class="ic icon-recipes"></i> Công thức</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>