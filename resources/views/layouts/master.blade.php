<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Hộp xanh">
    <!-- Chrome, Firefox OS, Opera and Vivaldi -->
    <meta name="theme-color" content="#ff514a">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#ff514a">
    <meta name="keywords" content="recipes food, recipes , sushi, chinese, italian food"> 
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ff514a">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="canonical" href="{{url()->current()}}" />
    <meta property="fb:app_id" content="287105981815060" />
    <meta name="description" content="{{ $siteDescription or 'Click để xem các món ăn hấp dẫn!' }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:title" content="{{ $siteTitle or 'Hộp Xanh' }}" />
    <meta property="og:description" content="{{ $siteDescription or 'Click để xem các món ăn hấp dẫn!' }}" />
    <meta property="og:image" content="{{ $siteImage or 'https://laravel.com/cover.jpg'}}"/>

    <title>{{ $siteTitle or 'Hộp Xanh' }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("/images/favicon.png?v=1") }}" />

    <style type="text/css">
      a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font:inherit;vertical-align:baseline}body,p{line-height:22px;font-size:13px}address,cite,dfn,em{font-style:italic}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}li,ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}table{border-collapse:collapse;border-spacing:0}p{margin:0 0 20px;color:#949089}html{-webkit-text-size-adjust:none}*{outline:0}input[type=submit]{-webkit-appearance:none;-moz-appearance:none;appearance:none;cursor:pointer;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px}::-moz-selection{color:#fff;text-shadow:none}::selection{color:#fff;text-shadow:none}blockquote{font-weight:400}.google-map iframe{width:100%;min-height:400px}pre{background:#F5F5F5;color:#888;padding:10px;margin:0;border:1px solid #E9E9E9;word-break:break-all;word-wrap:break-word;white-space:pre-line;overflow:hidden;line-height:24px}.display_none{display:none}.accordion-title,.alerts h3,.blog-content h3,.button,.callout-inner h3,.chefs-content h3,.comments-content-title h3,.dishes-content h3,.dropcap,.event-title div h3,.footer-widget>h6,.mega-menu-warp .box-icon h3,.menu-content h3,.more,.navigation li ul li a,.navigation>ul li,.page-content-title,.qoute p,.widget ul li,.widget-title h3,blockquote,body,h1,h2,h3,h4,h5,h6,input,label,textarea{font-family:Imprima,Helvetica,Arial,sans-serif}.button{display:inline-block;margin:5px 5px 5px 0;border:none;cursor:pointer;text-shadow:none!important;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;font-size:15px;font-weight:700}label,legend,span.t_center{display:block}.button i{margin-right:10px}.button.large{padding:8px 30px}.button.medium{padding:7px 21px}.button.small{padding:7px 15px}.button.mini{padding:3px 10px}.f_left{float:left!important}.f_right{float:right!important}input[type=text],input[type=password],input[type=email],input[type=url],select,textarea{padding:8px;outline:0;font-size:13px;font-weight:600;margin:0 0 20px;width:200px;max-width:100%;display:block;color:#2f3239;border:1px solid #dedede;-moz-transition:border .25s linear,color .25s linear,background-color .25s linear;-webkit-transition:border .25s linear,color .25s linear,background-color .25s linear;-o-transition:border .25s linear,color .25s linear,background-color .25s linear;transition:border .25s linear,color .25s linear,background-color .25s linear;background:#f3f3f3;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px}textarea{min-height:60px}select{width:220px;padding:5px}label,legend{cursor:pointer}.button.mini{font-size:12px}.button.small{font-size:14px}.button.medium{font-size:16px}.button.large{font-size:18px}.flex-direction-nav li a{font-size:31px}.padding_t_4{padding-top:4px}.margin_r_0_l_10{margin-right:0!important;margin-left:10px!important}.margin_r_10_l_0{margin-right:10px!important;margin-left:0!important}.margin_0{margin:0!important}.margin_r_5{margin-right:5px}.margin_r_7{margin-right:7px}.margin_r_10{margin-right:10px}.margin_r_15{margin-right:15px}.margin_r_20{margin-right:20px}.margin_l_5{margin-left:5px}.margin_l_7{margin-left:7px}.margin_l_10{margin-left:10px}.margin_l_15{margin-left:15px}.margin_l_20{margin-left:20px}.margin_t_5{margin-top:5px}.margin_t_7{margin-top:7px}.margin_t_10{margin-top:10px}.margin_t_15{margin-top:15px}.margin_t_20{margin-top:20px}.margin_t_25{margin-top:25px}.margin_t_50{margin-top:50px}.margin_b_5{margin-bottom:5px}.margin_b_7{margin-bottom:7px}.margin_b_10{margin-bottom:10px}.margin_b_15{margin-bottom:15px}.margin_b_20{margin-bottom:20px!important}.margin_b_25{margin-bottom:25px!important}.margin_b_30{margin-bottom:30px!important}.margin_b_35{margin-bottom:35px}.margin_b_40{margin-bottom:40px!important}.margin_b_50{margin-bottom:50px}.font10{font-size:10px}.font11{font-size:11px}.font12{font-size:12px}.font13{font-size:13px}.font14{font-size:14px}.font15{font-size:15px}.font16{font-size:16px}.font17{font-size:17px}.font18{font-size:18px}.font19{font-size:19px}.font20{font-size:20px}.font21{font-size:21px}.font22{font-size:22px}.font23{font-size:23px}.font24{font-size:24px}.font25{font-size:25px}.font26{font-size:26px}.font27{font-size:27px}.font28{font-size:28px}.font29{font-size:29px}.font30{font-size:30px}.font31{font-size:31px}.font32{font-size:32px}.font33{font-size:33px}.font34{font-size:34px}.font35{font-size:35px}.font36{font-size:36px}.font37{font-size:37px}.font38{font-size:38px}.font39{font-size:39px}.font40{font-size:40px}.font41{font-size:41px}.font42{font-size:42px}.font43{font-size:43px}.font44{font-size:44px}.font45{font-size:45px}.font46{font-size:46px}.font47{font-size:47px}.font48{font-size:48px}.font49{font-size:49px}.font50{font-size:50px}.font51{font-size:51px}.font52{font-size:52px}.font53{font-size:53px}.font54{font-size:54px}.font55{font-size:55px}.font56{font-size:56px}.font57{font-size:57px}.font58{font-size:58px}.font59{font-size:59px}.font60{font-size:60px}.font61{font-size:61px}.font62{font-size:62px}.font63{font-size:63px}.font64{font-size:64px}.font65{font-size:65px}.font66{font-size:66px}.font67{font-size:67px}.font68{font-size:68px}.font69{font-size:69px}.font70{font-size:70px}.font71{font-size:71px}.font72{font-size:72px}.font73{font-size:73px}.font74{font-size:74px}.font75{font-size:75px}.font76{font-size:76px}.font77{font-size:77px}.font78{font-size:78px}.font79{font-size:79px}.font80{font-size:80px}.font81{font-size:81px}.font82{font-size:82px}.font83{font-size:83px}.font84{font-size:84px}.font85{font-size:85px}.font86{font-size:86px}.font87{font-size:87px}.font88{font-size:88px}.font89{font-size:89px}.font90{font-size:90px}.font91{font-size:91px}.font92{font-size:92px}.font93{font-size:93px}.font94{font-size:94px}.font95{font-size:95px}.font96{font-size:96px}.font97{font-size:97px}.font98{font-size:98px}.font99{font-size:99px}.font100{font-size:100px}.height_10{height:10px!important}.height_15{height:15px!important}.height_20{height:20px!important}.height_25{height:25px!important}.height_30{height:30px;width:30px}.height_30 i{line-height:30px}.height_40{height:40px;width:40px}.height_40 i{line-height:40px}.height_50{height:50px;width:50px}.height_50 i{line-height:50px}.height_60{height:60px;width:60px}.height_70{height:70px;width:70px}.height_60 i{line-height:60px}.height_80{height:80px;width:80px}.height_80 i{line-height:80px}.height_90{height:90px;width:90px}.height_90 i{line-height:90px}.height_100{height:100px;width:100px}.height_100 i{line-height:100px}.gap{height:30px;clear:both}hr,hr.line{clear:both;height:0}.button.black,.button.color:hover,.button.dark_button.color{background:#2f3239}table.style th{background:#F3F3F3}.qoute,blockquote{color:#949089;font-size:13px;line-height:22px}.more{background:#2f3239}#map{background:#e5e3df}.button.normal{background:#f1f1f1}.flex-direction-nav li a,.flex-direction-nav li a:hover,.more,.more:hover{color:#fff;text-decoration:none}a,a.button.normal,body,li a:hover,p a:hover{color:#413c35;text-decoration:none}.qoute p{color:#757575}#columns p,.default-color{color:#2f3239}#columns p{font-size:13px}hr.line{border:solid #EAEAEA;border-width:1px 0 0}hr{border:solid #EAEAEA;border-width:1px 0 0;margin:-1px 0 0}abbr,dfn{border-bottom:1px dashed}blockquote{margin:0 0 20px 45px;position:relative}blockquote p{margin:0!important}blockquote:before{content:",,";font-size:70px;font-weight:700;position:absolute;top:-22px;left:-45px;line-height:22px}.flex-direction-nav li a,.t_center,table.style td,table.style th{text-align:center}.t_center{margin-right:auto;margin-left:auto}.t_left{text-align:left}.t_right{text-align:right}h1,h2,h3,h4,h5,h6{text-transform:none;margin-top:0;margin-bottom:18px}h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{font-weight:inherit}h1{font-size:24px;line-height:46px}h2{font-size:22px;line-height:42px}h3{font-size:20px;line-height:38px}h4{font-size:18px;line-height:34px}h5{font-size:16px;line-height:32px}h6{font-size:14px;line-height:30px}.accordion-title,.alerts h3,.callout-inner h3,.chefs-content h3,.dishes-content h3,.event-title div h3,.mega-menu-warp .box-icon h3,.menu-content h3,.page-content-title{line-height:24px}.footer-widget>h6{line-height:18px}.box_icon h1,.box_icon h2,.box_icon h3,.box_icon h4,.box_icon h5,.box_icon h6{margin-bottom:10px}b,strong{font-weight:700}abbr{cursor:help}big{font-size:large}small,sub,sup{position:relative;font-size:11px;vertical-align:baseline}sub{top:3px}sup{bottom:3px}mark{display:inline;padding:2px 4px;background-color:#f6f2d6;color:#7c6d08}mark.dark{background-color:#333;color:#fff}.table-style-1 table,.table-style-2 table{margin:0 0 30px;text-align:left;border:1px solid #dbdbdb;width:100%}.table-style-1 tr:nth-child(even),.table-style-1 tr:nth-child(odd),.table-style-2 tr:nth-child(even),.table-style-2 tr:nth-child(odd){background:#fff}.table-style-1 td,.table-style-1 th,.table-style-2 td,.table-style-2 th{padding:10px 20px;vertical-align:middle;border:1px solid #e2e2e2}.table-style-1 tr:hover,.table-style-2 tr:hover{background:#fafafa}.table-style-1 thead th,.table-style-2 thead th{color:#333;font-size:14px;font-weight:700;border:none;border:1px solid #dbdbdb;padding:15px 20px;background-color:#F9F9F9}.box-icon>div,.button,.event-img:before,.go-up,.menu-icon,.tparrows,.tparrows:before,a,input[type=submit]{-webkit-transition:color .1s linear,border .1s linear,opacity .1s linear,background-color .1s linear;-moz-transition:color .1s linear,border .1s linear,opacity .1s linear,background-color .1s linear;-ms-transition:color .1s linear,border .1s linear,opacity .1s linear,background-color .1s linear;-o-transition:color .1s linear,border .1s linear,opacity .1s linear,background-color .1s linear;transition:color .1s linear,border .1s linear,opacity .1s linear,background-color .1s linear}.chefs-img img,.event-title,.item img{-webkit-transition:all .4s ease-in;-moz-transition:all .4s ease-in;-ms-transition:all .4s ease-in;-o-transition:all .4s ease-in;transition:all .4s ease-in}.blog-date,.dishes-2 .dishes-content{-webkit-transition:all .2s ease-in;-moz-transition:all .2s ease-in;-ms-transition:all .2s ease-in;-o-transition:all .2s ease-in;transition:all .2s ease-in}a{text-decoration:none}img{max-width:100%;-moz-box-sizing:border-box;-ms-box-sizing:border-box;-o-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;vertical-align:middle;height:auto}
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style type="text/css">
      #loader:after,#loader:before{content:"";position:absolute}#loader-wrapper{position:fixed;top:0;left:0;width:100%;height:100%;direction:ltr;z-index:99999}#loader{display:block;position:relative;left:50%;top:50%;width:150px;height:150px;margin:-75px 0 0 -75px;border-radius:50%;border:3px solid transparent;border-top-color:#3498db;-webkit-animation:spin 2s linear infinite;animation:spin 2s linear infinite;z-index:1001}#loader:before{top:5px;left:5px;right:5px;bottom:5px;border-radius:50%;border:3px solid transparent;border-top-color:#7daf74;-webkit-animation:spin 3s linear infinite;animation:spin 3s linear infinite}#loader:after{top:15px;left:15px;right:15px;bottom:15px;border-radius:50%;border:3px solid transparent;border-top-color:#d33;-webkit-animation:spin 1.5s linear infinite;animation:spin 1.5s linear infinite}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spin{0%{-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg)}}#loader-wrapper .loader-section{position:fixed;top:0;width:51%;height:100%;background:#fff;z-index:1000;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}#loader-wrapper .loader-section.section-left{left:0}#loader-wrapper .loader-section.section-right{right:0}.loaded #loader-wrapper .loader-section.section-left{-webkit-transform:translateX(-100%);-ms-transform:translateX(-100%);transform:translateX(-100%);-webkit-transition:all .7s .3s cubic-bezier(.645,.045,.355,1);transition:all .7s .3s cubic-bezier(.645,.045,.355,1)}.loaded #loader-wrapper .loader-section.section-right{-webkit-transform:translateX(100%);-ms-transform:translateX(100%);transform:translateX(100%);-webkit-transition:all .7s .3s cubic-bezier(.645,.045,.355,1);transition:all .7s .3s cubic-bezier(.645,.045,.355,1)}.loaded #loader{opacity:0;-webkit-transition:all .3s ease-out;transition:all .3s ease-out}.loaded #loader-wrapper{visibility:hidden;-webkit-transform:translateY(-100%);-ms-transform:translateY(-100%);transform:translateY(-100%);-webkit-transition:all .3s 1s ease-out;transition:all .3s 1s ease-out}.no-js #loader-wrapper{display:none}.no-js h1{color:#222}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
    <!-- Stylesheets Core Library-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand" rel="stylesheet">

    <!-- Google Analytics -->
    <script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', 'UA-112227011-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->

    @yield('header')

  </head>
  <body class="sticky">
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    <!-- Preload spinner -->
    <div id="loader-wrapper">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div><!-- End Preload spinner -->

    <!--Wrapper-->
    <div id="wrap">

      <!--Navigation-->
      @include('common.header')
      <!--END Navigation-->

      <!--My Content-->
      @yield('content')
      <!--End My Content -->

      <!--Footer section-->
      @include('common.footer')
      <!--Footer  section-->
    </div><!-- ./wrapper -->

    <div class="go-up"><i class="fa fa-chevron-up"></i></div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ mix("js/custom.min.js") }}"></script>

    @yield('script')
    
  </body>
</html>