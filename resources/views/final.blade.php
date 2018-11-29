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
    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="col-md-2 text-center"><h5 class="text-secondary">ЗАГВАР</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БЛОК</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">ДАВХАР</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БҮРТГҮҮЛЭХ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">ГЭРЭЭ</h5></div>
            <div class="col-md-2 text-center"><h5>БАТАЛГААЖУУЛАХ</h5></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="progress">
                    <div class="progress-bar" data-width="100">
                    </div><!-- progress-bar -->
                </div><!-- progress -->
            </div><!-- col-->
        </div><!-- row-->
    </div><!-- container-->
    <br>



    <!-- slider-->
    <div class="headline text-center no-margin-bottom">


        <h6>PYRAMID APARTMENT</h6>
            <h3>БАТАЛГААЖУУЛАХ</h3>
        <br>


    </div><!-- headline -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table text-center">
                    <tr>
                        <td>{{$design->name}}</td>
                        <td>@if($block == 1)А блок@elseif($block == 2)B блок@else C блок@endif</td>
                        <td>{{$floor}}-р давхар</td>
                    </tr>
                </table>
                <br>
                <p class="text-center">Та амжилттай байраа захиаллаа. Гэрээ илгээгдсэн тохиолдолт бид танд
                    мессежээр мэдэгдэх ба мэдэгдсэнээс хойш 7 хоногийн дотор хийгдэхгүй бол таны захиалга цуцлагдах болно</p>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
    <div class="row"></div>





@endsection
@section('footer')
@endsection