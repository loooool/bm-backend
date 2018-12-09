<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Pyramid Apartments</title>

    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="{{asset('front/assets/images/logo_header.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-180x180.png">
    <meta name="msapplication-TileImage" content="{{asset('front/assets/images/logo_header.png')}}">
    <meta name="msapplication-TileColor" content="#00f0d1">
    <meta name="theme-color" content="#00f0d1">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7C;Roboto:100,500">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/bootstrap/css/bootstrap.min.css')}}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('front/assets/fonts/fontawesome/css/font-awesome.min.css')}}">

    <!-- DECODE ICONS -->
    <link rel="stylesheet" href="{{asset('front/assets/fonts/decode-icons/css/decode-icons.min.css')}}">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="{{asset('front/assets/plugins/fancybox/jquery.fancybox.min.css')}}">

    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" href="{{asset('front/assets/plugins/revolutionslider/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/plugins/revolutionslider/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/plugins/revolutionslider/css/navigation.css')}}">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="{{asset('front/assets/plugins/owl-carousel/owl.carousel.css')}}">

    @yield('header')


    <!-- COUNTERS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugins/counters/odometer-theme-default.css')}}">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="{{asset('front/assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.css')}}">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugins/animations/animate.min.css')}}">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="{{asset('front/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/pages-style.css')}}">


</head>

<body class="header-modern footer-dark">

<div id="main-container">

    <!-- HEADER -->
    <header id="header">

        <div class="container-fluid">
            <div></div>
            <div class="row">
                <div class="col-md-3">

                    <!-- LOGO -->
                    <div id="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('front/assets/images/logo_white.png')}}" alt="" width="200px">
                        </a>
                    </div><!-- LOGO -->

                </div><!-- col -->
                <div class="col-md-9">

                    <nav>

                        <a class="mobile-menu-button" href="#"><i class="decode-icon-menu"></i></a>

                        <ul class="menu clearfix" id="menu">
                            @yield('menu')
                        </ul>

                    </nav>
                    <!-- MENU -->


                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container-fluid -->

    </header><!-- HEADER -->


    <!-- PAGE CONTENT -->
    <div id="page-content">
        @yield('content')
    </div><!-- PAGE CONTENT -->


    <!-- FOOTER -->
    <footer>
        <div id="footer">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="widget widget-text">

                            <div>

                                <p><img src="{{asset('front/assets/images/logo_white.png')}}" alt=""></p>
                                <br>
                                <!--								<p>Description bichih ystoi uchir eniig daraa ni hiij bolno. odoohondoo uur umandaa anhaarah.</p>-->

                            </div>

                        </div><!-- widget-text -->

                    </div><!-- col -->
                    <div class="col-md-3">

                        <div class="widget widget-pages">

                            <h6 class="widget-title">Холбоосууд</h6>

                            <ul>
                                <li><a href="index.html">Танилцуулга</a></li>
                                <li><a href="bair.html">Байрны сонголтууд</a></li>
                                <li><a href="uilchilgee.html">Үйлчилгээний талбай</a></li>
                                <li><a href="guitsetgegch.html">Гүйцэтгэгч</a></li>
                            </ul>

                        </div><!-- widget-pages -->

                    </div><!-- col -->


                    <div class="col-md-3">

                        <div class="widget widget-pages">

                            <h6 class="widget-title">Холбоо барих</h6>
                            <p>Хаяг: Улаанбаатар, Сүхбаатар дүүрэг, Юнион Бюлдинг, А корпус, 3-н давхар, 308 тоот</p>
                            <br>
                            <p>Цахим шуудан:  marketing@bmconsult.mn
                                <br>Утас: 99103514, 99074241, 80261111, 80262222, 80263333</p>
                        </div><!-- widget-pages -->

                    </div><!-- col -->

                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer -->
        <div id="footer-bottom">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-md-6">
                    </div><!-- col -->
                    <div class="col-md-6">
                        <div class="widget widget-text">
                            <div>
                                <p class="copyright"><img src="{{asset('front/assets/images/gym.png')}}" alt="" width="25" height="25r">  <b>© 2018 BM consultant</b> ВЭБ САЙТЫГ Bodygram XXK ХӨГЖҮҮЛЭВ. (+976-95520073)</p>
                            </div>

                        </div><!-- widget-text -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- footer-bottom -->

    </footer><!-- FOOTER -->

</div>

<!-- SCROLL UP -->
<a id="scroll-up" class="waves"><i class="fa fa-angle-up"></i></a>


<!-- jQUERY -->
<script src="{{asset('front/assets/plugins/jquery/jquery-2.2.4.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('front/assets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('front/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- VIEWPORT -->
<script src="{{asset('front/assets/plugins/viewport/jquery.viewport.js')}}"></script>

<!-- MENU -->
<script src="{{asset('front/assets/plugins/menu/hoverIntent.js')}}"></script>
<script src="{{asset('front/assets/plugins/menu/superfish.js')}}"></script>

<!-- FANCYBOX -->
<script src="{{asset('front/assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>

<!-- REVOLUTION SLIDER  -->
<script src="{{asset('front/assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- OWL CAROUSEL -->
<script src="{{asset('front/assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>

<!-- WATERWHEEL CAROUSEL -->
<script src="{{asset('front/assets/plugins/waterwheelcarousel/tweenmax.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/waterwheelcarousel/jquery.waterwheelcarousel.min.js')}}"></script>

<!-- PARALLAX -->
<script src="{{asset('front/assets/plugins/parallax/jquery.stellar.min.js')}}"></script>

<!-- ISOTOPE -->
<script src="{{asset('front/assets/plugins/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>

@yield('footer')

<!-- CONTACT FORM VALIDATE & SUBMIT -->
<script src="{{asset('front/assets/plugins/validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/submit/jquery.form.min.js')}}"></script>


<!-- CHARTS -->
<script src="{{asset('front/assets/plugins/charts/jquery.easypiechart.min.js')}}"></script>

<!-- COUNTERS -->
<script src="{{asset('front/assets/plugins/counters/jquerysimplecounter.js')}}"></script>
<script src="{{asset('front/assets/plugins/counters/odometer.min.js')}}"></script>

<!-- INSTAFEED -->
<script src="{{asset('front/assets/plugins/instafeed/instafeed.min.js')}}"></script>

<!-- TWITTER -->
<script src="{{asset('front/assets/plugins/twitter/twitterfetcher.min.js')}}"></script>

<!-- YOUTUBE PLAYER -->
<script src="{{asset('front/assets/plugins/ytplayer/jquery.mb.ytplayer.min.js')}}"></script>

<!-- COUNTDOWN -->
<script src="{{asset('front/assets/plugins/countdown/jquery.countdown.min.js')}}"></script>

<!-- ANIMATIONS -->
<script src="{{asset('front/assets/plugins/animations/wow.min.js')}}"></script>

<!-- CUSTOM JS -->
<script src="{{asset('front/assets/js/custom.js')}}"></script>

</body>

</html>