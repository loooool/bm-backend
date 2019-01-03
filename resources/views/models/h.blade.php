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
        <a href="{{url('user')}}">@if(Auth::user()){{Auth::user()->name}} @else Нэвтрэх @endif</a>
    </li>
@endsection
@section('content')

    <br>
    <!--        div neesen-->
    <div class="row">
        <div class="col-md-12">
            <div class="headline text-center no-maigin-bottom">
                <h6 class=".lead">PYRAMID APARTMENT</h6>
                <h2><b>H</b> <span class="font-weight-light te font">3AГBAP</span></h2>
            </div>
        </div>
    </div>
    <!--        div haasan-->

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <img src="{{asset('front/assets/images/designs/47.59.png')}}" width="100%" style="border-radius: 10px">
            <!--            desription row-->
            {{--<div class="row">--}}
                {{--<div class="col-md-11">--}}
                    {{--<br>--}}
                    {{--<h3>Description</h3>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-11">--}}

                            {{--<p>Lorem ipsum</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-1"></div>--}}
            {{--</div>--}}
            <!--            description end-->
        </div>


        <div class="col-md-3">
            <div class="text-box" style="border-radius: 15px">
                <div class="row">
                    <div class="col-md-6">
                        <h4>2 өрөө</h4>
                    </div>
                    <div class="col-md-6">
                        <h4>47.59мкв</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <p><b>Унтлагын өрөө</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>15.99мкв</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <p><b>Зочны өрөө</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>30.43мкв</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <p><b>Ариун цэврийн өрөө</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>4.38мкв</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <p><b>Тагт</b></p>
                    </div>
                    <div class="col-md-6">
                        <p>1.66мкв</p>
                    </div>
                </div>
            </div>
            <!--            row-n div-->
            <a href="{{url("/models/8/block")}}">
                <button class="btn btn-block btn-black" >Онлайн захиалга өгөх<br>1,950,000₮/мкв</button>
            </a>
            <img src="{{asset('front/assets/images/4-12.jpg')}}">
        </div>
        <!--        col div-->

        <div class="col-md-1"></div>
        <!--        div duussjaaga-->
    </div>
    <!-- slider-->
    <br>
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
            <a href="{{url("/models/8/block")}}">
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
                        <a href="{{url("/models/9")}}"><img src="{{asset('front/assets/images/54.95.jpg')}}" alt=""></a>
                    </div><!-- image-box-thumbnail -->

                    <h5><a href="{{url("/models/9")}}">I загвар</a></h5>

                    <div class="row">
                        <div class="col-md-6 text-center">54.95<br>мкв</div>
                        <div class="col-md-6 text-center">2 <br>өрөө</div>
                    </div>


                </div><!-- image-box -->

            </div>
            <div class="col-md-4">
                <div class="image-box wow fadeInUp">

                    <div class="image-box-thumbnail">
                        <a href="{{url("/models/10")}}"><img src="{{asset('front/assets/images/67.24.jpg')}}" alt=""></a>
                    </div><!-- image-box-thumbnail -->

                    <h5><a href="{{url("/models/10")}}">j загвар</a></h5>

                    <div class="row">
                        <div class="col-md-6 text-center">67.24<br>мкв</div>
                        <div class="col-md-6 text-center">2 <br>өрөө</div>
                    </div>


                </div><!-- image-box -->

            </div>
            <div class="col-md-4">
                <div class="image-box wow fadeInUp">

                    <div class="image-box-thumbnail">
                        <a href="{{url("/models/11")}}"><img src="{{asset('front/assets/images/87.77.jpg')}}" alt=""></a>
                    </div><!-- image-box-thumbnail -->

                    <h5><a href="{{url("/models/11")}}">K загвар</a></h5>

                    <div class="row">
                        <div class="col-md-6 text-center">87.77<br>мкв</div>
                        <div class="col-md-6 text-center">3 <br>өрөө</div>
                    </div>


                </div><!-- image-box -->

            </div>
        </div>
    </div>
    <!--        zagvaruud-->
@endsection