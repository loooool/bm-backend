@extends('layouts.front')
@section('menu')
    <li class="megamenu">
        <a href="{{route('welcome')}} ">Танилцуулга</a>
    </li>
    <li class="dropdown">
        <a href="{{route('models')}}">Байрны сонголтууд</a>
    </li>
    <li class="dropdown active">
        <a class="waves" href="{{url('blog')}}">Нийтлэлүүд</a>
    </li>
    <li class="megamenu">
        <a href="{{url('user')}}">Нэвтрэх</a>
    </li>
@endsection
@section('content')


    {{--<div id="page-header">--}}
        {{--<h2 class="text-white"><b>DAMN</b></h2>--}}
        {{--<h5 class="text-white">Өөрийгөө бусдын амжилтаар цэнэглэ</h5>--}}
    {{--</div><!-- page-header -->--}}

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 ml-auto mr-auto">
                <div class="blog-article">

                    <div class="blog-article-thumbnail">
                        <a href="blog-post-no-sidebar.html"><img src="{{asset('assets/images/jak.jpg')}}" alt=""></a>
                    </div><!-- blog-article-thumbnail -->

                    <h4 class="blog-article-title"><a href="blog-post-no-sidebar.html"><b>Jak Mongolia</b> - Хүн эрүүл байж удаан жаргалтай амьдрана</a></h4>

                    <ul class="blog-article-details">
                        <li class="date"><i class="decode-icon-time"></i> <a href="#">September 07, 2017</a></li>
                        {{--<li class="author"><i class="decode-icon-edit"></i> by <a href="#">Loredana Papp</a></li>--}}
                        {{--<lI class="category"><i class="decode-icon-layers"></i> <a href="#">Mon-Altius PerfectBody Club</a></lI>--}}
                        {{--<li class="comments"><i class="decode-icon-chat"></i> <a href="#">3 Comments</a></li>--}}
                    </ul><!-- blog-article-details -->

                    <div class="blog-article-content">

                        <p>
                            Олон улсын спортын мастер ,биеийн тамир спортын тэргүүний ажилтан. "Mon-Altius PerfectBody" клуб, "Power Nutrition" компаний тамирчин.

                        </p>
                        <a href="blog-post-no-sidebar.html">Унших</a>

                    </div><!-- blog-article-content -->

                </div><!-- blog-article -->



            </div>
        </div><!-- row end-->

    </div>





@endsection
@section('footer')
@endsection