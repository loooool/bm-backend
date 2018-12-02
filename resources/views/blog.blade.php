@extends('layouts.front')
@section('header')
    {{--<link rel="stylesheet" href="https://cdn-static-1.medium.com/_/fp/css/main-branding-base.mgmk3IAP7RjRVL2_wGR9ig.css">--}}
    @endsection
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

    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 ml-auto mr-auto">
                @foreach($blogs as $blog)

                <div class="blog-article">

                    <div class="blog-article-thumbnail">
                        <a href="{{url('/blog'.'/'.$blog->id)}}"><img src="@if($blog->photos->first()){{asset('assets/images/blog').'/'.$blog->photos->first()->path}}"@endif alt=""></a>
                    </div><!-- blog-article-thumbnail -->

                    <h4 class="blog-article-title"><a href="{{url('/blog'.'/'.$blog->id)}}"><b>{{$blog->title}}</b></a></h4>

                    <ul class="blog-article-details">
                        <li class="date"><i class="decode-icon-time"></i> <a href="#">{{$blog->created_at}}</a></li>
                        <li class="date"><i class="decode-icon-video"></i> <a href="#">@if($blog->video == null)@elseВидео мэдээлэлтэй@endif</a></li>
                    </ul><!-- blog-article-details -->

                    <div class="blog-article-content">

                        <p>
                            <?php echo str_limit($blog->content, 250);?>
                        </p>
                        <a href="{{url('/blog'.'/'.$blog->id)}}">Унших</a>

                    </div><!-- blog-article-content -->

                </div><!-- blog-article -->
                    @endforeach

            </div>
        </div><!-- row end-->

    </div>





@endsection
@section('footer')
@endsection