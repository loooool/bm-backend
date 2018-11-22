@extends('layouts.front')

@section('menu')

            <li class="megamenu">
                <a href="{{route('welcome')}} ">Танилцуулга</a>
            </li>
            <li class="dropdown active">
                <a href="{{route('models')}}">Байрны сонголтууд</a>
            </li>
            <li class="dropdown">
                <a class="waves" href="talbai.html">Үйлчилгээний талбай</a>
            </li>
            <li class="megamenu">
                <a href="aboutus.html">Гүйцэтгэгч</a>

            </li>
@endsection
@section('content')
    <br>
    <!--    row ehelsen-->
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img src="{{asset('front/assets/images/4-12.jpg')}}">
        </div>
        <div class="col-md-5">
            <img src="{{asset('front/assets/images/1-3-plan.jpg')}}">
        </div>
        <div class="col-md-1"></div>
    </div>
    <!--        row duussan-->



<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <ul class="filter text-center">
                <li>
                    <a class="active" href="#" data-filter="*">Бүгд</a>
                </li>

                <li>
                    <a href="#" data-filter=".categ-2">2 өрөө</a>
                </li>
                <li>
                    <a href="#" data-filter=".categ-3">3 өрөө</a>
                </li>
                <li>
                    <a href="#" data-filter=".categ-4">4 өрөө</a>
                </li>
            </ul>

        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="isotope cols-3 gutter">
                <!--                            categories-->
                <div class="isotope-item categ-2">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('a')}}"><img src="{{asset('front/assets/images/37.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('a')}}">A загвар</a></h5>

                        <div class="row">
                            <div class="col-md-6 text-center">37.85<br>мкв</div>
                            <div class="col-md-6 text-center">2 <br>өрөө</div>
                        </div>

                    </div>
                    <!--end-->
                </div><!-- isotope-item -->
                <div class="isotope-item categ-3">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('b')}}"><img src="{{asset('front/assets/images/69.73.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('b')}}">B загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">69.73<br>мкв</div>
                            <div class="col-md-6 text-center">3 <br>өрөө</div>
                        </div>

                    </div>
                    <!--end-->
                </div><!-- isotope-item -->
                <div class="isotope-item categ-2">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('c')}}"><img src="{{asset('front/assets/images/51.47.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('c')}}">C загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">51.47<br>мкв</div>
                            <div class="col-md-6 text-center">2 <br>өрөө</div>
                        </div>

                    </div>
                    <!--end-->
                </div><!-- isotope-item -->
                <!--                            categories-->
                <div class="isotope-item categ-2">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('d')}}"><img src="{{asset('front/assets/images/54.12.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('d')}}">D загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">54.12<br>мкв</div>
                            <div class="col-md-6 text-center">2 <br>өрөө</div>
                        </div>
                    </div>
                    <!--end-->
                </div><!-- isotope-item -->
                <div class="isotope-item categ-4">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('e')}}"><img src="{{asset('front/assets/images/81.75.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('e')}}">E загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">81.75<br>мкв</div>
                            <div class="col-md-6 text-center">4 <br>өрөө</div>
                        </div>
                    </div>
                    <!--end-->
                </div><!-- isotope-item -->
                <div class="isotope-item categ-3">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('f')}}"><img src="{{asset('front/assets/images/62.37.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('f')}}">F загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">62.37<br>мкв</div>
                            <div class="col-md-6 text-center">3 <br>өрөө</div>
                        </div>

                    </div>
                    <!--end-->
                </div><!-- isotope-item -->
                <div class="isotope-item categ-2">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('g')}}"><img src="{{asset('front/assets/images/52.98.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('g')}}">G загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">52.98<br>мкв</div>
                            <div class="col-md-6 text-center">2 <br>өрөө</div>
                        </div>

                    </div>
                    <!--end-->
                </div><!-- isotope-item -->

                <div class="isotope-item categ-2">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('h')}}"><img src="{{asset('front/assets/images/47.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('h')}}">H загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">47.59<br>мкв</div>
                            <div class="col-md-6 text-center">2 <br>өрөө</div>
                        </div>

                    </div>
                    <!--end-->
                </div><!-- isotope-item -->
                <!--                            categories-->



                <div class="isotope-item categ-2">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('i')}}"><img src="{{asset('front/assets/images/54.95.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('i')}}">I загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">54.95<br>мкв</div>
                            <div class="col-md-6 text-center">2 <br>өрөө</div>
                        </div>

                    </div>
                    <!--end-->
                </div><!-- isotope-item -->
                <div class="isotope-item categ-2">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('j')}}"><img src="{{asset('front/assets/images/67.24.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('j')}}">J загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">67.24<br>мкв</div>
                            <div class="col-md-6 text-center">2 <br>өрөө</div>
                        </div>

                    </div>
                    <!--end-->
                </div><!-- isotope-item -->

                <div class="isotope-item categ-3">
                    <!--start-->
                    <div class="image-box wow fadeInUp">
                        <div class="image-box-thumbnail">
                            <a href="{{route('k')}}"><img src="{{asset('front/assets/images/87.77.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{route('k')}}">K загвар</a></h5>
                        <div class="row">
                            <div class="col-md-6 text-center">87.77<br>мкв</div>
                            <div class="col-md-6 text-center">3 <br>өрөө</div>
                        </div>

                    </div>
                    <!--end-->
                </div><!-- isotope-item -->




            </div><!-- isotope -->

        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->

<br>
@endsection





