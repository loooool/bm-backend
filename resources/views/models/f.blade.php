@extends('layouts.front')
@section('menu')


    <li class="megamenu">
        <a href="{{route('welcome')}} ">Танилцуулга</a>
    </li>
    <li class="dropdown active">
        <a href="{{route('models')}}">Байрны сонголтууд</a>
    </li>
    <li class="dropdown">
        <a class="waves" href="{{url('blog')}}">Нийтлэлүүд</a>
    </li>
    <li class="megamenu">
        <a href="{{url('user')}}">Нэвтрэх</a>
    </li>
@endsection
@section('content')

    <br>
    <!--        div neesen-->
    <div class="row">
        <div class="col-md-12">
            <div class="headline text-center no-maigin-bottom">
                <h6 class=".lead">PYRAMID APARTMENT</h6>
                <h2><b>F</b> <span class="font-weight-light te font">3AГBAP</span></h2>
            </div>
        </div>
    </div>
    <!--        div haasan-->

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <div class="sketchfab-embed-wrapper"><iframe width="100%" height="545"  src="https://sketchfab.com/models/89c45d1d5dfa4876ba353c86007084b8/embed" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

            </div>
            <!--            desription row-->
            <div class="row">
                <div class="col-md-11">
                    <br>
                    <h3>Description</h3>
                    <div class="row">
                        <div class="col-md-11">

                            <p>Lorem ipsum</p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <!--            description end-->
        </div>


        <div class="col-md-3">
            <div class="text-box" style="border-radius: 15px">
                <div class="row">
                    <div class="col-md-6">
                        <h4>3 өрөө</h4>
                    </div>
                    <div class="col-md-6">
                        <h4>62.37мкв</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p><b>Унтлагын өрөө</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>11.6мкв</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <p><b>Aриун цэврийн өрөө</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>4.86мкв</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <p><b>Зочны өрөө</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>26.63мкв</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <p><b>Мастер унтлагын өрөө</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>13мкв</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p><b>Мастер aриун цэврийн өрөө</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>4.16мкв</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p><b>Тагт</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>2.12мкв</p>
                    </div>
                </div>
            </div>
            <!--            row-n div-->
            <a href="{{url("/models/6/block")}}">
                <button class="btn btn-block btn-black" >Онлайн захиалга өгөх<br>1,950,000₮/мкв</button>
            </a>
            <img src="{{asset('front/assets/images/4-12.jpg')}}">
        </div>
        <!--        col div-->

        <div class="col-md-1"></div>
        <!--        div duussjaaga-->
    </div>
    <!-- slider-->
    <div class="headline text-center no-margin-bottom">


        <h6>PYRAMID APARTMENT</h6>
        <h3>ИНТЕРЬЕР</h3>
        <br>



    </div><!-- headline -->

    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="owl-carousel images-slider">
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior1.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior2.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior3.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior4.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior7.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior10.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior11.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior12.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior13.jpg')}}" alt="">
                    </div><!-- item -->
                    <div class="item">
                        <img src="{{asset('front/assets/images/interior14.jpg')}}" alt="">
                    </div><!-- item -->

                </div><!-- images-slider -->

            </div><!-- col -->

        </div><!-- row -->
    </div>

    <!-- end slider-->


    <section class="full-section dark-section" style="margin-bottom: 0px">

        <div class="headline text-center no-margin-bottom">

            <h6>PYRAMID APARTMENT</h6>
            <h3>ОНЛАЙН ЗАХИАЛГА</h3>
            <br>
            <a href="{{url("/models/6/block")}}">
            <button class="btn btn-white btn-outline waves waves-dark">ЗАХИАЛГА ӨГӨХ</button>
            </a>

        </div><!-- headline -->
    </section>
    <!--zahialah-->
    <br>

    <!--gallery div-->


    <!--gallery div-->

    <!--        zagvaruud-->
    <br>

    <div class="container">
        <div class="headline text-center no-maigin-bottom">
            <h6 class=".lead">PYRAMID APARTMENT</h6>
            <h3><span class="font-weight-light te font">БУСАД 3AГBAPУУД</span></h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image-box wow fadeInUp">

                    <div class="image-box-thumbnail">
                        <a href="{{url("/models/5")}}"><img src="{{asset('front/assets/images/81.75.jpg')}}" alt=""></a>
                    </div><!-- image-box-thumbnail -->

                    <h5><a href="{{url("/models/5")}}">E загвар</a></h5>

                    <div class="row">
                        <div class="col-md-6 text-center">81.75<br>мкв</div>
                        <div class="col-md-6 text-center">4 <br>өрөө</div>
                    </div>


                </div><!-- image-box -->

            </div>
            <div class="col-md-4">
                <div class="image-box wow fadeInUp">

                    <div class="image-box-thumbnail">
                        <a href="{{url("/models/7")}}"><img src="{{asset('front/assets/images/52.98.jpg')}}" alt=""></a>
                    </div><!-- image-box-thumbnail -->

                    <h5><a href="{{url("/models/7")}}">G загвар</a></h5>

                    <div class="row">
                        <div class="col-md-6 text-center">52.98<br>мкв</div>
                        <div class="col-md-6 text-center">2 <br>өрөө</div>
                    </div>


                </div><!-- image-box -->

            </div>
            <div class="col-md-4">
                <div class="image-box wow fadeInUp">

                    <div class="image-box-thumbnail">
                        <a href="{{url("/models/8")}}"><img src="{{asset('front/assets/images/47.jpg')}}" alt=""></a>
                    </div><!-- image-box-thumbnail -->

                    <h5><a href="{{url("/models/8")}}">H загвар</a></h5>

                    <div class="row">
                        <div class="col-md-6 text-center">47.59<br>мкв</div>
                        <div class="col-md-6 text-center">2 <br>өрөө</div>
                    </div>


                </div><!-- image-box -->

            </div>
        </div>
    </div>
    <!--        zagvaruud-->
@endsection