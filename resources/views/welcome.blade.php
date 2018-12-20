@extends('layouts.front')
@section('header')
    <meta property="og:url"           content="{{url('/')}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Pyramid Apartment" />
    <meta property="og:description"   content="Орчин үеийн дэвшилтэд технологийг инженерийн төгс шийдэлтэй хослуулан, оршин суугчдын тав тухтай, тайван аюулгүй орчинг бүрдүүлэн, евро стандартад нийцсэн материал тоноглолуудыг ашиглаж, шилдэг архитектурын дизайны шийдэлтэй өндөр зэрэглэлийн орон сууцны хотхоныг бид бүтээн байгуулж байна" />
    <meta property="og:image"         content="{{asset('front/assets/images/slider1.jpg')}}" />
    @endsection
@section('menu')
            <li class="megamenu active">
                <a href="{{route('welcome')}} ">Танилцуулга</a>
            </li>
            <li class="dropdown">
                <a href="{{route('models')}}">Байрны сонголтууд</a>
            </li>
            <li class="dropdown">
                <a class="waves" href="{{url('blog')}}">Нийтлэлүүд</a>
            </li>
            <li class="megamenu">
                <a href="{{url('user')}}">@if(Auth::user()){{Auth::user()->name}} @else Нэвтрэх @endif</a>
            </li>
    @endsection
@section('content')

    <div class="rev_slider_wrapper no-margin-bottom">
        <div class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="fade" data-thumb="{{asset('front/assets/images/slider1.jpg')}}">

                    <img  src="{{asset('front/assets/images/slider1.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-scalestart="100" data-scaleend="120">

                    <div class="overlay-blend-mode"></div>


                    <div class="tp-caption title"
                         data-x="center"
                         data-y="300"
                         data-voffset="50"
                         data-start="1300"
                         data-speed="300"
                         data-textalign="center"
                         data-transform_in="o:0;y:100;s:500;e:Power2.easeInOut;"
                         data-transform_out="o:0;y:-100;s:500;e:Power2.easeInOut;">
                        Амьдралд гэрэл<br> гэгээ нэмнэ
                    </div>

                    <div class="tp-caption text"
                         data-x="center"
                         data-y="460"
                         data-voffset="150"
                         data-start="1400"
                         data-speed="300"
                         data-transform_in="o:0;y:100;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;y:-100;s:400;e:Power2.easeInOut;">
                        <em>*BMconsultant*</em>
                    </div>

                    <div class="tp-caption navigation"
                         data-x="right"
                         data-y="560"
                         data-hoffset="20"
                         data-voffset="120"
                         data-start="0"
                         data-speed="300"
                         data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                        <span>01</span>/04
                    </div>
                    <div class="tp-static-layers">
                        <div class="tp-caption tp-resizeme tp-static-layer"
                             data-x="20"
                             data-y="560"
                             data-voffset="120"
                             data-start="0"
                             data-startslide="0"
                             data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                             data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                            <a id="next-section" href="#next-section"><i class="fa fa-angle-down"></i> scroll down</a>
                        </div>
                    </div>

                </li>
                <li data-transition="fade" data-thumb="{{asset('front/assets/pyramidapartment/3.jpg')}}">

                    <img  src="{{asset('front/assets/pyramidapartment/3.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-scalestart="100" data-scaleend="120">

                    <div class="overlay-blend-mode"></div>


                    <div class="tp-caption title"
                         data-x="center"
                         data-y="300"
                         data-voffset="50"
                         data-start="1300"
                         data-speed="300"
                         data-textalign="center"
                         data-transform_in="o:0;y:100;s:500;e:Power2.easeInOut;"
                         data-transform_out="o:0;y:-100;s:500;e:Power2.easeInOut;">
                        Тав тухтай <br>цэвэр цэмцгэр орчин
                    </div>

                    <div class="tp-caption text"
                         data-x="center"
                         data-y="460"
                         data-voffset="150"
                         data-start="1400"
                         data-speed="300"
                         data-transform_in="o:0;y:100;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;y:-100;s:400;e:Power2.easeInOut;">

                    </div>

                    <div class="tp-caption navigation"
                         data-x="right"
                         data-y="560"
                         data-hoffset="20"
                         data-voffset="120"
                         data-start="0"
                         data-speed="300"
                         data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                        <span>02</span>/04
                    </div>
                    <div class="tp-static-layers">
                        <div class="tp-caption tp-resizeme tp-static-layer"
                             data-x="20"
                             data-y="560"
                             data-voffset="120"
                             data-start="0"
                             data-startslide="0"
                             data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                             data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                            <a id="next-section" href="#next-section"><i class="fa fa-angle-down"></i> scroll down</a>
                        </div>
                    </div>

                </li>
                <li data-transition="fade" data-thumb="{{asset('front/assets/pyramidapartment/5.jpg')}}">

                    <img  src="{{asset('front/assets/pyramidapartment/5.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-scalestart="100" data-scaleend="120">

                    <div class="overlay-blend-mode"></div>


                    <div class="tp-caption title"
                         data-x="center"
                         data-y="300"
                         data-voffset="50"
                         data-start="1300"
                         data-speed="300"
                         data-textalign="center"
                         data-transform_in="o:0;y:100;s:500;e:Power2.easeInOut;"
                         data-transform_out="o:0;y:-100;s:500;e:Power2.easeInOut;">
                        Хүүхэд тань <br> ээлтэй байгууламж
                    </div>

                    <div class="tp-caption text"
                         data-x="center"
                         data-y="460"
                         data-voffset="150"
                         data-start="1400"
                         data-speed="300"
                         data-transform_in="o:0;y:100;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;y:-100;s:400;e:Power2.easeInOut;">

                    </div>

                    <div class="tp-caption navigation"
                         data-x="right"
                         data-y="560"
                         data-hoffset="20"
                         data-voffset="120"
                         data-start="0"
                         data-speed="300"
                         data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                        <span>03</span>/04
                    </div>
                    <div class="tp-static-layers">
                        <div class="tp-caption tp-resizeme tp-static-layer"
                             data-x="20"
                             data-y="560"
                             data-voffset="120"
                             data-start="0"
                             data-startslide="0"
                             data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                             data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                            <a id="next-section" href="#next-section"><i class="fa fa-angle-down"></i> scroll down</a>
                        </div>
                    </div>

                </li>

                <li data-transition="fade" data-thumb="{{asset('front/assets/pyramidapartment/7.jpg')}}">

                    <img  src="{{asset('front/assets/pyramidapartment/7.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-scalestart="100" data-scaleend="120">

                    <div class="overlay-blend-mode"></div>


                    <div class="tp-caption title"
                         data-x="center"
                         data-y="300"
                         data-voffset="50"
                         data-start="1300"
                         data-speed="300"
                         data-textalign="center"
                         data-transform_in="o:0;y:100;s:500;e:Power2.easeInOut;"
                         data-transform_out="o:0;y:-100;s:500;e:Power2.easeInOut;">
                        Найрсаг хөршийн <br>холбоо
                    </div>

                    <div class="tp-caption text"
                         data-x="center"
                         data-y="460"
                         data-voffset="150"
                         data-start="1400"
                         data-speed="300"
                         data-transform_in="o:0;y:100;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;y:-100;s:400;e:Power2.easeInOut;">

                    </div>

                    <div class="tp-caption navigation"
                         data-x="right"
                         data-y="560"
                         data-hoffset="20"
                         data-voffset="120"
                         data-start="0"
                         data-speed="300"
                         data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                        <span>04</span>/04
                    </div>
                    <div class="tp-static-layers">
                        <div class="tp-caption tp-resizeme tp-static-layer"
                             data-x="20"
                             data-y="560"
                             data-voffset="120"
                             data-start="0"
                             data-startslide="0"
                             data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                             data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                            <a id="next-section" href="#next-section"><i class="fa fa-angle-down"></i> scroll down</a>
                        </div>
                    </div>

                </li>





            </ul>

            <div class="tp-static-layers">
                <div class="tp-caption tp-resizeme tp-static-layer"
                     data-x="20"
                     data-y="bottom"
                     data-voffset="120"
                     data-start="0"
                     data-startslide="0"
                     data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                     data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                </div>
            </div>

        </div><!-- rev_slider -->
    </div><!-- rev_slider_wrapper -->

    <div class="container" id="next-section">
        <div class="row">
            <div class="col-md-12">

                <div id="section-23">

                    <div class="row">
                        <div class="col-lg-5 col-md-8 ml-auto mr-auto">

                            <div class="headline text-center no-margin-bottom">

                                <h6>ТАНИЛЦУУЛГА</h6>
                                <h3>PYRAMID APARTMENT</h3>

                            </div><!-- headline -->

                        </div><!-- col -->
                    </div><!-- row -->

                    <br>

                    <div class="row">
                        <div class="col-lg-10 col-md-11 ml-auto mr-auto">

                            <p class="text-center">
                                Орчин үеийн дэвшилтэд технологийг инженерийн төгс шийдэлтэй хослуулан, оршин суугчдын тав тухтай, тайван аюулгүй орчинг бүрдүүлэн, евро стандартад нийцсэн материал тоноглолуудыг ашиглаж, шилдэг архитектурын дизайны шийдэлтэй өндөр зэрэглэлийн орон сууцны хотхоныг бид бүтээн байгуулж байна
                            </p>

                        </div><!-- col -->
                    </div><!-- row -->

                </div><!-- section-23 -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="image-box wow fadeInUp">

                    <div class="image-box-thumbnail">
                        <a href="{{url('/models/1')}}"><img src="{{asset('front/assets/images/37.jpg')}}" alt=""></a>
                    </div><!-- image-box-thumbnail -->

                    <h5><a href="{{url('/models/1')}}">A загвар</a></h5>

                    <div class="row">
                        <div class="col-md-6 text-center">37.85<br>мкв</div>
                        <div class="col-md-6 text-center">2 <br>өрөө</div>
                    </div>


                </div><!-- image-box -->

            </div><!-- col -->
            <div class="col-md-4">

                <div class="image-box wow fadeInUp">

                    <div class="image-box-thumbnail">
                        <a href="{{url('/models/2')}}"><img src="{{asset('front/assets/images/69.73.jpg')}}" alt=""></a>
                    </div><!-- image-box-thumbnail -->

                    <h5><a href="{{url('/models/2')}}">B загвар</a></h5>

                    <div class="row">
                        <div class="col-md-6 text-center">69.73<br>мкв</div>
                        <div class="col-md-6 text-center">3 <br>өрөө</div>
                    </div>


                </div><!-- image-box -->
            </div><!-- col -->
            <div class="col-md-4">

                <div class="image-box wow fadeInUp">

                    <div class="image-box-thumbnail">
                        <a href="{{url('/models/3')}}"><img src="{{asset('front/assets/images/51.47.jpg')}}" alt=""></a>
                    </div><!-- image-box-thumbnail -->

                    <h5><a href="{{url('/models/3')}}">C загвар</a></h5>

                    <div class="row">
                        <div class="col-md-6 text-center">51.47<br>мкв</div>
                        <div class="col-md-6 text-center">2 <br>өрөө</div>
                    </div>


                </div><!-- image-box -->

            </div><!-- col -->
        </div><!-- row -->
        <div class="row ">
            <div class="col-md-12 text-center">
                <a class="btn btn-white btn-outline waves waves-dark" href="{{route('models')}}">Цааш үзэх ...</a>

            </div>


        </div>
    </div><!-- container -->
    <br>

    <section class="full-section dark-section">


        <div class="row">
            <div class="col-md-2"></div>
            <div class="container col-md-8">
                <div class="headline text-center">

                    <h6>3D MODEL</h6>
                    <h3>ТАНИЛЦУУЛГА</h3>


                </div><!-- headline -->
                <div class="embed-responsive embed-responsive-16by9">
                    <div class="sketchfab-embed-wrapper"><iframe width="100%" height="480" src="https://sketchfab.com/models/dfeff447df7345a3a285f90e7ce37ee4/embed?preload=1" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

                        <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                            <a href="https://sketchfab.com/models/dfeff447df7345a3a285f90e7ce37ee4?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Pyramid</a>
                            by <a href="https://sketchfab.com/tselmeg?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">tselmeg</a>
                            on <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
                        </p>
                    </div>
                </div><!-- embed-responsive -->
                <p class="text-center">
                    Пирамид Апартмент хотхон нь Хан-уул дүүргийн 10-р хороо Нисэхийн төв зам дагуу Улаанбаатар хотын утаа тоосжилт, замын түгжрэлээс хол эрүүл цэвэр агаарт, хотын шинэчилсэн төлөвлөлтөөр Хотын захиргаа баригдах бүсэд байршилтай.
                </p>
                <br>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 ">
                        <div class="counter-value" >6430</div>
                        <div class="counter-details">мкв ТАЛБАЙ</div>
                    </div><!-- col -->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="counter-value" >314</div>
                        <div class="counter-details">ОРОН СУУЦ</div>
                    </div><!-- col -->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="counter-value" >3</div>
                        <div class="counter-details">БЛОК</div>
                    </div><!-- col -->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="counter-value" >12</div>
                        <div class="counter-details">ДАВХАР</div>
                    </div><!-- col -->


                </div><!-- row -->
            </div><!-- container -->
            <div class="col-md-2"></div>
        </div>

    </section><!-- full-section -->



    <div class="container">
        <div class="headline text-center no-margin-bottom">

            <h6>PYRAMID APARTMENT</h6>
            <h3>ДАВУУ ТАЛ</h3>
            <br>
            <p>

                Ирээдүйд үнэ цэнэ нь өсөх, чанарын өндөр түвшинд, орчин үеийн дэвшилтэт технологийг инженерийн төгс шийдэлтэй хослуулан, бүрэн цутгамал, сантехникийн далд шийдлүүд, галын болон ус алдалтын автомат хяналт, 1-ээс 12 давхар хүртэл металл хүрээтэй гоёмсог шилэн хаалт бүхий  тагттай өндөр зэрэглэлийн орон сууцтай хотхон. Газар хөдлөлтийн 8 баллд тэсвэртэй цутгамал нил бетон суурьтай, бүрэн цутгамал хийцлэлтэй.

            </p>


        </div><!-- headline -->
        <br>
        <div class="row">
            <div class="col-md-4">

                <div class="service-box style-4">

                    <img src="{{asset('front/assets/images/feature-car.jpg')}}" alt="">

                    <div class="service-box-content">

                        <h5>МАШИНЫ ЗОГСООЛ</h5>

                        <p>
                            Таны авто машиныг найдвартай хамгаалах цэвэр тохилог дулаан орчныг бүрдүүлсэн авто машины зогсоол
                        </p>
                    </div><!-- service-box-content -->

                </div><!-- service-box -->

            </div><!-- col -->
            <div class="col-md-4">

                <div class="service-box style-4">

                    <img src="{{asset('front/assets/images/feature-security.jpg')}}" alt="">

                    <div class="service-box-content">

                        <h5>ХАРУУЛ ХАМГААЛАЛТ</h5>

                        <p>
                            24 цагийн дохиолол, харуул хамгаалалт бүхий аж төрөх аюулгүй орчныг бүрдүүлсэн
                        </p>
                    </div><!-- service-box-content -->

                </div><!-- service-box -->

            </div><!-- col -->
            <div class="col-md-4">

                <div class="service-box style-4">

                    <img src="{{asset('front/assets/images/feature-playground.jpg')}}" alt="">

                    <div class="service-box-content">

                        <h5>НОГООН БАЙГУУЛАМЖ</h5>

                        <p>
                            Ногоон байгууламж бүхий салхилах талбай, хүүхдийн тоглоомын талбай, сагсан бөмбөгийн талбайтай.
                        </p>
                    </div><!-- service-box-content -->

                </div><!-- service-box -->

            </div><!-- col -->
        </div>

    </div><!-- container -->
    <section class="full-section dark-section" style="margin-bottom: 0px">

        <div class="headline text-center no-margin-bottom">

            <h6>PYRAMID APARTMENT</h6>
            <h3>ОНЛАЙН ЗАХИАЛГА</h3>
            <br>
            <a href="{{url('models')}}">
                <button class="btn btn-white btn-outline waves waves-dark">ЗАХИАЛГА ӨГӨХ</button>
            </a>

        </div><!-- headline -->
    </section>
    @endsection
@section('footer')
    @endsection