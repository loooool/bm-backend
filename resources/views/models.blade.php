@extends('front')
@section('menu')
    <nav>

        <a class="mobile-menu-button" href="#"><i class="decode-icon-menu"></i></a>

        <ul class="menu clearfix" id="menu">
            <li class="megamenu active">
                <a href="{{route('welcome')}} ">Танилцуулга</a>
            </li>
            <li class="dropdown">
                <a href="{{route('models')}}">Байрны сонголтууд</a>
            </li>
            <li class="dropdown">
                <a class="waves" href="talbai.html">Үйлчилгээний талбай</a>
            </li>
            <li class="megamenu">
                <a href="aboutus.html">Гүйцэтгэгч</a>

            </li>
        </ul>

    </nav>
    @endsection
@section('content')
    <br>
    <!--    row ehelsen-->
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img src="assets/images/4-12.jpg">
        </div>
        <div class="col-md-5">
            <img src="assets/images/1-3-plan.jpg">
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
                            <a href="a.html"><img src="assets/images/37.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="a.html">A загвар</a></h5>

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
                            <a href="b.html"><img src="assets/images/69.73.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="b.html">B загвар</a></h5>
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
                            <a href="c.html"><img src="assets/images/51.47.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="c.html">C загвар</a></h5>
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
                            <a href="d.html"><img src="assets/images/54.12.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="d.html">D загвар</a></h5>
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
                            <a href="#"><img src="assets/images/81.75.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="e.html">E загвар</a></h5>
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
                            <a href="f.html"><img src="assets/images/62.37.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="f.html">F загвар</a></h5>
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
                            <a href="g.html"><img src="assets/images/52.98.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="g.html">G загвар</a></h5>
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
                            <a href="h.html"><img src="assets/images/47.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="h.html">H загвар</a></h5>
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
                            <a href="I.html"><img src="assets/images/54.95.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="I.html">I загвар</a></h5>
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
                            <a href="j.html"><img src="assets/images/67.24.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="j.html">J загвар</a></h5>
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
                            <a href="k.html"><img src="assets/images/87.77.jpg" alt=""></a>
                        </div><!-- image-box-thumbnail -->
                        <h5><a href="k.html">K загвар</a></h5>
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





