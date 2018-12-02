@extends('layouts.front')
@section('header')
    {{--<link rel="stylesheet" href="https://cdn-static-1.medium.com/_/fp/css/main-branding-base.mgmk3IAP7RjRVL2_wGR9ig.css">--}}
    <meta property="og:url"           content="{{url('/blog'.'/'.$blog->id)}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$blog->title}}" />
    <meta property="og:description"   content="<?php echo str_limit($blog->content, 250);?>" />
    <meta property="og:image"         content="{{asset('assets/images/blog').'/'.$blog->photos->first()->path}}" />
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

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=501372743559082';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 ml-auto mr-auto">

                    <div class="blog-article">



                        <h3 class="blog-article-title"><a href="blog-post-no-sidebar.html"><b>{{$blog->title}}</b></a></h3>


                        <ul class="blog-article-details">
                            <li class="date"><i class="decode-icon-time"></i> <a href="#">{{$blog->created_at}}</a></li>
                            <li class="date"><i class="decode-icon-video"></i> <a href="#">@if($blog->video == null)@elseВидео мэдээлэлтэй@endif</a></li>
                        </ul><!-- blog-article-details -->
                        <br>
                        <div class="blog-article-thumbnail">
                            <a href="{{url('/blog'.'/'.$blog->id)}}"><img src="@if($blog->photos->first()){{asset('assets/images/blog').'/'.$blog->photos->first()->path}}"@endif alt=""></a>
                        </div><!-- blog-article-thumbnail -->

                        <div class="blog-article-content">
                            <p>
                                <?php echo $blog->content;?>
                            </p>
                            @if($blog->video != null)
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/55AalrbALAk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div><!-- embed-responsive -->
                            @endif
                        </div><!-- blog-article-content -->
                        <br>
                    </div><!-- blog-article -->
                
            </div>
        </div><!-- row end-->

    </div>





@endsection
@section('footer')
@endsection