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
                            <a href="{{url('models/1/block')}}"><img src="{{asset('front/assets/images/37.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/1/block')}}">A загвар</a></h5>

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
                            <a href="{{url('models/2/block')}}"><img src="{{asset('front/assets/images/69.73.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/2/block')}}">B загвар</a></h5>
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
                            <a href="{{url('models/3/block')}}"><img src="{{asset('front/assets/images/51.47.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/3/block')}}">C загвар</a></h5>
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
                            <a href="{{url('models/4/block')}}"><img src="{{asset('front/assets/images/54.12.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/4/block')}}">D загвар</a></h5>
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
                            <a href="{{url('models/5/block')}}"><img src="{{asset('front/assets/images/81.75.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/5/block')}}">E загвар</a></h5>
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
                            <a href="{{url('models/6/block')}}"><img src="{{asset('front/assets/images/62.37.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/6/block')}}">F загвар</a></h5>
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
                            <a href="{{url('models/7/block')}}"><img src="{{asset('front/assets/images/52.98.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/7/block')}}">G загвар</a></h5>
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
                            <a href="{{url('models/8/block')}}"><img src="{{asset('front/assets/images/47.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/8/block')}}">H загвар</a></h5>
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
                            <a href="{{url('models/9/block')}}"><img src="{{asset('front/assets/images/54.95.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/9/block')}}">I загвар</a></h5>
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
                            <a href="{{url('models/10/block')}}"><img src="{{asset('front/assets/images/67.24.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/10/block')}}">J загвар</a></h5>
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
                            <a href="{{url('models/11/block')}}"><img src="{{asset('front/assets/images/87.77.jpg')}}" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="{{url('models/11/block')}}">K загвар</a></h5>
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





