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
                <li data-transition="fade" data-thumb="{{asset('front/assets/images/2.jpg')}}">

                    <img  src="{{asset('front/assets/images/2.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-scalestart="100" data-scaleend="100">

                    <div class="overlay-blend-mode"></div>


                    <div class="tp-caption navigation"
                         data-x="right"
                         data-y="560"
                         data-hoffset="20"
                         data-voffset="120"
                         data-start="0"
                         data-speed="300"
                         data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                        <span>01</span>/05
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
                <li data-transition="fade" data-thumb="{{asset('front/assets/images/1050.jpg')}}">

                    <img  src="{{asset('front/assets/images/1050.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-scalestart="100" data-scaleend="100">

                    <div class="overlay-blend-mode"></div>




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
                        <span>02</span>/05
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
                <li data-transition="fade" data-thumb="{{asset('front/assets/images/1.jpg')}}">

                    <img  src="{{asset('front/assets/images/1.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-scalestart="100" data-scaleend="100">

                    <div class="overlay-blend-mode"></div>




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
                        <span>03</span>/05
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

                <li data-transition="fade" data-thumb="{{asset('front/assets/images/3.jpg')}}">

                    <img  src="{{asset('front/assets/images/3.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-scalestart="100" data-scaleend="100">

                    <div class="overlay-blend-mode"></div>



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
                        <span>04</span>/05
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
                <li data-transition="fade" data-thumb="{{asset('front/assets/images/105d0.jpg')}}">

                    <img  src="{{asset('front/assets/images/105d0.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="15000" data-scalestart="100" data-scaleend="100">

                    <div class="overlay-blend-mode"></div>




                    <div class="tp-caption navigation"
                         data-x="right"
                         data-y="560"
                         data-hoffset="20"
                         data-voffset="120"
                         data-start="0"
                         data-speed="300"
                         data-transform_in="o:0;s:400;e:Power2.easeInOut;"
                         data-transform_out="o:0;s:400;e:Power2.easeInOut;">
                        <span>05</span>/05
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
                                ПИРАМИД АПАРТМЕНТ хотхон нь Чингис хаан Олон улсын нисэх буудлын  зүүн талд байрлалтай, үйлчилгээний төв, 314 айлын орон сууц бүхий 3 блок барилга юм.  Түүнчлэн ПИРАМИД АПАРТМЕНТ хотхоны оршин суугчдынхаа бүхий л хэрэгцээ шаардлагыг хангах 4 давхар үйлчилгээний төвтэй байх юм.
                                <br>
                                <br>
                                Та манай хотхоныг сонгосноор гэр бүлийн тав тухтай орчин, аз
                                жаргалтай нандин дурсамжаар хөврөх таны гэр бүлд зориулан бүтээн
                                байгуулсан амар тайван орчинд амьдрах болно.
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

    <section class="full-section ">


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
                    ПИРАМИД АПАРТМЕНТ хотхон нь бетон цутгамал бүтээцтэй, өндөр
                    чанарын барилгын материалаар сүндэрлэн босч байна. Бид Монголд
                    анх нэвтрүүлж байгаа шатдаггүй хөөсөнцрийг барилгынхаа дулаалгад
                    ашиглан оршин суугчиддаа чанартай, дулаан алдалтгүй, Европын
                    өндөр чанар бүхий сантехникийн болоод цахилгааны материал
                    тоноглолоор хийгдсэн ДЭЭД ЗЭРГИЙН ЧАНАР-тай орон сууцыг санал
                    болгож байна.
                    <br>
                    <br>
                    Үүгээрээ бид хотхоныхоо оршин суугчдад ӨНДӨР ЧАНАР-ыг амлаж
                    байна...
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

                Бид танд тааламжтай төлбөрийн нөхцөл, цэвэр агаар, аюулгүй орчин, гадна талбайдаа оршин суугчдад хүртээмжтэй авто зогсоол, ногоон байгууламж бүхий хүүхдийн тоглоомын талбай, хотхоны хүрээн дэх нэгдсэн харуул хамгаалалт, айл бүрт ухаалаг хяналтын систем бүхий интерьерын хамгийн орчин үеийн оновчтой шийдэл, өрөөний зөв зохион байгуулалт бүхий орон сууцнуудаа санал болгож байна.
                <br>
                <br>
                Та манай хотхонд байр худалдан авах хүсэлтэй бол бид танд төлбөрийн уян хатан нөхцөл санал болгож байна.
            </p>
        </div><!-- headline -->
    </div><!-- container -->
    <section class="full-section dark-section half-image" id="section-51" style="margin-bottom: 0px">

        <div class="full-section-overlay" data-opacity="69"></div>

        <div class="half-image-left wow fadeInLeft" style="background-image: url({{asset('front/assets/images/park.jpg')}});">
            <img src="{{asset('front/assets/images/park.jpg')}}" alt="">
        </div><!-- half-image-left -->

        <div class="full-section-container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 ml-lg-auto mr-lg-5">

                        <div class="headline no-margin-bottom">

                            <h6>PYRAMID APARTMENT</h6>
                            <h3>НОГООН ОРЧИН</h3>

                        </div><!-- headline -->

                        <br><br>

                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">

                                <div class="service-box style-11 wow fadeInUp">
                            <P>
                                Pyramid Apartment хотхон нь Оршин суугчдаа тав тухтай, эрүүл аюулгүй орчинд амьдруулах үүднээс хотхоны баруун хойд талбайд эрүүл мэндэд тустай, агаарыг цэвэршүүлэх мод, бут, сөөг, зүлэг бүхий ногоон байгууламж тарьж ургуулан алсын харах орчин гайхалтай бүрдсэн хамгийн эрхэм хүмүүстэйгээ амар тайван, аз жаргалтай амьдрах гайхалтай ногоон орчныг бүрдүүлнэ.
                            </P>
                                </div>
                            </div>
                        </div><!-- row -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-->

        </div><!-- full-section-container -->
    </section><!-- full-section -->
    <section class="full-section dark-section half-image" id="section-51" style="margin-bottom: 0px; margin-top: 0px">
        <div class="full-section-container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 mr-lg-auto mr-lg-5 text-right">

                        <div class="headline no-margin-bottom">

                            <h6>PYRAMID APARTMENT</h6>
                            <h3>ҮЙЛЧИЛГЭЭНИЙ ТӨВ</h3>

                        </div><!-- headline -->

                        <br><br>

                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">

                                <div class="service-box style-11 wow fadeInUp">
                                    <P>
                                        Pyramid Apartment хотхоны зүүн хойд хэсэгт байрлах 4 давхар үйлчилгээний төв нь хэрэгцээт бүхий л бүтээгдэхүүн, үйлчилгээг нэг дор төвлөрүүлсэн худалдаа үйлчилгээний нэгдсэн төв юм. Зорин ирж буй үйлчлүүлэгчдийн сэтгэл ханамж, ая тухыг хангах үүднээс хангалттай хүрэлцэхүйц авто машины зогсоол, тав тухтай орчинтой.
                                    <br>
                                    <br>
                                        Одоогоор худалдаа үйлчилгээний төвд супермаркет, гэр ахуйн бараа, эмийн сан,хувийн хүүхдийн цэцэрлэг, кофе шоп, үсчин ,гоо сайхан, спорт клуб, хүүхдийн хувцас, гутал, цэцэг, бэлэг дурсгал, банк зэрэг оршин суугчдын бүхий л хэрэгцээг хангах байгууллагууд үйл ажиллагаа явуулах болно.
                                        <br>
                                        <br>
                                        Түүнчлэн худалдаа үйлчилгээний байгууллагуудыг ашиг орлоготой, хүний урсгал сайтай байлгах үүднээс төв замтайгаа ойр, хамгийн зүүн хойд хэсэгт нэгдсэн байдлаар төлөвлөж таатай орчинг бүрдүүлсэн.
                                    </P>
                                </div>
                            </div>
                        </div><!-- row -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-->

        </div><!-- full-section-container -->
        <div class="full-section-overlay" data-opacity="69"></div>

        <div class="half-image-right wow fadeInRight" style="background-image: url({{asset('front/assets/images/slider1.jpg')}});">
            <img src="{{asset('front/assets/images/slider1.jpg')}}" alt="">
        </div><!-- half-image-left -->
    </section><!-- full-section -->




    <section class="full-section dark-section half-image" id="section-51" style="margin-bottom: 0px; margin-top: 0px">

        <div class="full-section-overlay" data-opacity="69"></div>

        <div class="half-image-left wow fadeInLeft">
            <iframe style="margin-bottom: -10px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.3602385933877!2d106.77115531560372!3d47.85581097920194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d96eb3d4bfbfaf5%3A0xf135181d30f362d2!2zNDfCsDUxJzIwLjkiTiAxMDbCsDQ2JzI0LjAiRQ!5e1!3m2!1smn!2smn!4v1546493066102" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div><!-- half-image-left -->

        <div class="full-section-container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 ml-lg-auto mr-lg-5">

                        <div class="headline no-margin-bottom">

                            <h6>PYRAMID APARTMENT</h6>
                            <h3>ЗАМ ХАРИЛЦААНЫ ТААТАЙ БҮС</h3>

                        </div><!-- headline -->

                        <br><br>

                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">

                                <div class="service-box style-11 wow fadeInUp">
                                    <P>
                                        Улаанбаатар хотын хамгийн үнэ цэнэтэй бүс болох Яармагт Нийслэлийн Тамгын газар баригдаж байгаа бөгөөд хүн ам, авто машины нягтаршилаас зайдуу, цэвэр агаарт байршилтай бөгөөд British school of ulaanbaatar, Shine Mongol Harumafuji school, Хан-Уул Дүүргийн Улсын 118-р сургууль, 60-р сургуультай ойрхон байрладаг. Xотын авто зам, дэд бүтцийн таатай бүсэд байрладаг.
                                    </P>
                                    <div class="row">
                                        <div class="col-md-2 text-center">17.8 KM<br>ЦЭЦЭРЛЭГТ ХҮРЭЭЛЭН</div>
                                        <div class="col-md-2 text-center">14 KM<br>ПАРК</div>
                                        <div class="col-md-2 text-center">14.7 KM<br>ЗАЙСАН</div>
                                        <div class="col-md-2 text-center">25.5 KM<br>SKY RESORT</div>
                                        <div class="col-md-2 text-center">2.9 KM<br>ТУУЛ ГОЛ</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-->

        </div><!-- full-section-container -->
    </section><!-- full-section -->



    <section class="full-section" id="section-51" style="margin-bottom: 0px; margin-top: 0px; background: #ffffff">


            <div class="full-section-container">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5 mr-lg-auto mr-lg-5">

                            <div class="headline no-margin-bottom">

                                <h6>PYRAMID APARTMENT</h6>
                                <h3>СӨХ-ИЙН ҮЙЛЧИЛГЭЭ</h3>

                            </div><!-- headline -->

                            <br><br>

                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-12">

                                    <div class="service-box style-11 wow fadeInUp">
                                        <P>
                                            Орон сууцны үнэ цэнийг өсгөхөд нөлөөлдөг нэг чухал хүчин зүйл бол СӨХ юм.  Орон сууц ашиглалтад орсон цагаас эхлэн хувийн эзэмшлийн талбай, гаднах орц, дээвэр, гадна орчны тохижилт зэрэг нь дундын өмчид тооцогдож, харин түүнийг харж, хянаж, хариуцаж, түүнчлэн оршин суугчдын эрх ашгийг хамгаалж, тав тухтай байдлыг хангаж байх томоохон үүргийг СӨХ хүлээдэг учраас тухайн орон сууц ирээдүйд ямар дүр төрхтэй үлдэх эсэх нь энэхүү байгууллагаас шууд хамаарч байдаг.
                                        </P>
                                    </div>
                                </div>
                            </div><!-- row -->

                        </div><!-- col -->



                    <div class="col-lg-5 ml-lg-auto mr-lg-5">

                        <div class="headline no-margin-bottom">

                            <h6>PYRAMID APARTMENT</h6>
                            <h3>ХАРУУЛ ХАМГААЛАЛТ, КАМЕРЖУУЛАЛТ</h3>

                        </div><!-- headline -->

                        <br><br>

                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">

                                <div class="service-box style-11 wow fadeInUp">
                                    <P>
                                        Pyramid Apartment хотхоны хувьд ногоон байгууламж бүхий талбай, оршин суугчдын иж бүрэн салхилах талбай, авто машины ил зогсоол, дулаан граж гэх мэтчилэн оршин суугчдын хувийн болон дундын өмчийг иж бүрэн 24 цагийн камержуулалт суурьлуулж, харуул хамгаалалттай Таны өмч хөрөнгө, гэр бүлийн аюулгүй байдлыг хангах орчинг бүрдүүлнэ.
                                    </P>
                                </div>
                            </div>
                        </div><!-- row -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-->

        </div><!-- full-section-container -->
    </section><!-- full-section -->

    <section class="full-section dark-section half-image" id="section-51" style="margin-bottom: 0px; margin-top: 0px">
        <div class="full-section-container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 mr-lg-auto mr-lg-5 text-right">

                        <div class="headline no-margin-bottom">

                            <h6>PYRAMID APARTMENT</h6>
                            <h3>ИНТЕРЬЕР ДИЗАЙН</h3>

                        </div><!-- headline -->

                        <br><br>

                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">

                                <div class="service-box style-11 wow fadeInUp">
                                    <P>
                                        ОРЧИН ҮЕИЙН ИНТЕРЬЕР ДИЗАЙН
                                        <br>
                                        Энэхүү интерьер дизайн нь уламжлалт болон модерн загваруудын онцлог шинжүүдийг нэгтгэн тэдний тэнцвэрт байдлыг бий болгосноор тухлаг, тайван, энгийн уур амьсгалыг бүрдүүлсэн. Тавилгууд нь цайвар хэв маягтайгаа уялдсаны дээр орчин үеийн монгол гэр бүлийн амьдралын хэв маягтай төгс зохицох шинэлэг дизайнтай. Мөн орон зайг илүү уужим, цэлгэр харагдуулах цайвар, цагаан, шаргал, завсрын өнгөнүүдийн  интерьерт түлхүү ашиглан таны гэр бүлийн тав тухыг бүрдүүлнэ.

                                        <br>
                                        <br>
                                        ШИНЭ СОНГОДОГ ИНТЕРЬЕР ДИЗАЙН
                                        <br>
                                        Хэт анхаарал татахуйц чимэглэл, хэтрүүлсэн гоёлоос зайлсхийн арьс, зотон даавуу, хилэн материалыг түлхүү хэрэглэсэн бөгөөд байгальд болон хүний эрүүл мэндэд сөрөг нөлөөгүй эко ханын цаас, цэвэр модон шал, орон зайг гэрэлтүүлэх шаргал, цайвар өнгөнүүдийг түлхүү ашигласнаар байгалийн өнгөний тогтоцтой төгс зохицож тав тухтай, гоёмсог орчинг бүрдүүлсэн.

                                    </P>
                                </div>
                            </div>
                        </div><!-- row -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-->

        </div><!-- full-section-container -->
        <div class="full-section-overlay" data-opacity="69"></div>

        <div class="half-image-right wow fadeInRight" style="background-image: url({{asset('front/assets/images/interior.jpg')}});">
            <img src="{{asset('front/assets/images/2.jpg')}}" alt="">
        </div><!-- half-image-left -->
    </section><!-- full-section -->

    <section class="full-section dark-section half-image" id="section-51" style="margin-bottom: 0px; margin-top: 0px">
        <div class="full-section-container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 ml-lg-auto ml-lg-5">

                        <div class="headline no-margin-bottom">

                            <h6>PYRAMID APARTMENT</h6>
                            <h3>ХОТХОНЫ ЗОХИОН БАЙГУУЛАЛТ</h3>

                        </div><!-- headline -->

                        <br><br>

                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">

                                <div class="service-box style-11 wow fadeInUp">
                                    <P>
                                        ХОТХОНЫ ЕРӨНХИЙ ТӨЛӨВЛӨЛТ<br>
                                        Pyramid Apartment хотхон нь гэр бүлийн бүхий л хэрэгцээ, тав тухыг нэг дор хангахаар төлөвлөгдсөн. Хотхоны гол хэсэгт хүүхдийн тоглоомын талбай болон баруун хойд хэсэгт мод бут, сөөг бүхий оршин суугчид салхилах ногоон байгууламж зэргийг бүтээн байгуулсан бөгөөд хотхоны зүүн хойд хэсгээр автомашины ил  зогсоол , худалдаа үйлчилгээний төв зэргийг төлөвлөсөн. Оршин суугчдын болон хүүхдүүдийн чөлөөт цагаа өнгөрүүлэх нийтийн эзэмшлийн талбай машины хөдөлгөөнөөс бүрэн тусгаарлагдсан учир бяцхан үрс маань аливаа учрах аюул эрсдэлээс хол, амар тайван тоглох боломжоор хангагдсан.
                                    </P>
                                </div>
                            </div>
                        </div><!-- row -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-->

        </div><!-- full-section-container -->
        <div class="full-section-overlay" data-opacity="69"></div>

        <div class="half-image-left wow fadeInLeft" style="background-image: url({{asset('front/assets/images/pyramid_min.jpg')}});">
            <img src="{{asset('front/assets/images/pyramid_min.jpg')}}" alt="">
        </div><!-- half-image-left -->
    </section><!-- full-section -->

    <section class="full-section dark-section half-image" id="section-51" style="margin-bottom: 0px; margin-top: 0px">
        <div class="full-section-container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 mr-lg-auto mr-lg-5  text-right">

                        <div class="headline no-margin-bottom">

                            <h6>PYRAMID APARTMENT</h6>
                            <h3>ДОМОФОН СИСТЕМ</h3>

                        </div><!-- headline -->

                        <br><br>

                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">

                                <div class="service-box style-11 wow fadeInUp">
                                    <P>
                                        Та бүхэнд “Pyramid Apartment хотхон”-ы орон сууцанд тавигдаж буй ДОМОФОН төхөөрөмжийг танилцуулж байна. Төхөөрөмжийн үндсэн зорилго нь гэр бүлийн бүхий л гишүүдийн аж төрөх хэв маягийг хялбаршуулан аюулгүй байдлыг бүрэн хангахад оршино. <br>
                                        <br>Тоон технологи дээр суурилсан видео домофоны тусламжтайгаар та орцны үүдийг онгойлгох, хонхны камерыг дэлгэц дээр харах, хариу өгөөгүй зочдын мэдээллийг хадгалан харах боломжтой.

                                    </P>
                                </div>
                            </div>
                        </div><!-- row -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-->

        </div><!-- full-section-container -->
        <div class="full-section-overlay" data-opacity="69"></div>

        <div class="half-image-right wow fadeInRight" style="background-image: url({{asset('front/assets/images/domophone2.jpg')}});">
            <img src="{{asset('front/assets/images/domophone2.jpg')}}" alt="">
        </div><!-- half-image-left -->
    </section><!-- full-section -->

    <div class="container">
        <div class="headline no-margin-bottom">
            <br>
            <br>
            <h6>PYRAMID APARTMENT</h6>
            <h3>АШИГЛАЛТАНД ОРОХ ХУГАЦАА</h3>
            <br>
            <p>
                ПИРАМИД АПАРТМЕНТ хотхоны 1-р ээлжийн барилга болох А блок 2019 оны 9-р сард бүрэн ашиглалтанд орно.
                <br>
                <br>
                Мөн 2019 оны 12-р сард ашиглалтанд орохоор төлөвлөгдсөн хотхоны Б блокдоо бид захиалгаа авч байгааг дуулгахад таатай байна.
                <br>
                <br>
                Бид 12 давхар орон сууцандаа 2, 3 болон 4 өрөөний сонголттойгоор, хамгийн орчин үеийн интерьер дизайн бүхий, өрөөний зөв зохион байгуулалттай орон сууцнуудаа танд санал болгож байна.
                <br>
                <br>
                ПИРАМИД АПАРТМЕНТ хотхоны дэргэд манай борлуулалтын алба ажиллаж, таны хүссэн цагт бид барилгын явц болоод танд хэрэгтэй бусад мэдээллийг өгөх болно.
            </p>
        </div><!-- headline -->
    </div><!-- container -->

    <br>
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="owl-carousel images-slider">


                    <div class="item">
                        <img src="{{asset('front/assets/images/show/3.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/show/4.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/show/5.jpg')}}" alt="">
                    </div><!-- item -->

                </div><!-- images-slider -->

            </div><!-- col -->

        </div><!-- row -->
    </div>


    <div class="container">
        <div class="headline no-margin-bottom">
            <br>
            <br>
            <h6>PYRAMID APARTMENT</h6>
            <h3>ТӨЛБӨРИЙН НӨХЦӨЛ</h3>
            <br>
            <p>
                Та манай хотхонд байр худалдан авах хүсэлтэй бол бид танд төлбөрийн уян хатан нөхцөл санал болгож байна.
                <br>
                <br>
                Та урьдчилгаа 15-30%-иа төлөөд байраа захиалах боломжтой. Түүнчлэн бид танд таны захиалсан урьдчилгаа мөнгөн дүнд тохируулан төлбөрийн аян хатан нөхцөл, үнийн хөнгөлөлт үзүүлж, хэрвээ та хүсвэл компанийн 3 жил хүртэлх хүүгүй хувь лизингэд хамрагдан байр, үл хөдлөх хөрөнгөтэй болох боломжтой юм
                <br>
                <br>
                ПИРАМИД АПАРТМЕНТ хотхоны 1-р ээлжийн барилга болох А блок 2019 оны 9-р сард бүрэн ашиглалтанд орно.
                <br>
                <br>
                Мөн 2019 оны 12-р сард ашиглалтанд орохоор төлөвлөгдсөн хотхоны Б блокдоо бид захиалгаа авч байгааг дуулгахад таатай байна.
                <br>
                <br>
                Бид 12 давхар орон сууцандаа 2, 3 болон 4 өрөөний сонголттойгоор, хамгийн орчин үеийн интерьер дизайн бүхий, өрөөний зөв зохион байгуулалттай орон сууцнуудаа танд санал болгож байна.
                <br>
                <br>
                ПИРАМИД АПАРТМЕНТ хотхоны дэргэд манай борлуулалтын алба ажиллаж, таны хүссэн цагт бид барилгын явц болоод танд хэрэгтэй бусад мэдээллийг өгөх болно.
            </p>
        </div><!-- headline -->
    </div><!-- container -->


    <section class="full-section" style="margin-bottom: 0px">

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