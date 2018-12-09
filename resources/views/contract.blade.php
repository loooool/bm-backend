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
    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="col-md-2 text-center"><h5 class="text-secondary">ЗАГВАР</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БЛОК</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">ДАВХАР</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БҮРТГҮҮЛЭХ</h5></div>
            <div class="col-md-2 text-center"><h5 >ГЭРЭЭ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БАТАЛГААЖУУЛАХ</h5></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="progress">
                    <div class="progress-bar" data-width="83">
                    </div><!-- progress-bar -->
                </div><!-- progress -->
            </div><!-- col-->
        </div><!-- row-->
    </div><!-- container-->


    <br>
    <!-- slider-->
    <div class="headline text-center no-margin-bottom">
        <h6>PYRAMID APARTMENT</h6>
        <h3 id="blocka">ГЭРЭЭНИЙ ДРАФТ</h3>
        <br>
        <p>Бид танд гэрээг шуудангаар хүргэж өгөх болно. Та доорх гэрээний драфттай танилцан зөвшөөрч байгаа бол<br> өөрийн шуудангийн хаяг болон гэрийн хаягаа оруулна уу</p>
        <br>
    </div><!-- headline -->

    <div class="row">
        <div class="col-md-2"></div><!-- col-->
        <div class="col-md-8">
            <table class="table text-center">
                <tr>
                    <td>{{$design->name}}</td>
                    <td>@if($block == 1)А блок@elseif($block == 2)B блок@else C блок@endif</td>
                    <td>{{$floor}}-р давхар</td>
                </tr>
            </table>
            <embed src="{{asset('front/assets/images/BMconsultant.pdf')}}" type="application/pdf"   height="900px" width="100%">
            <br>
            <br>
            <table class="table">
                <tr>
                    <td></td>
                </tr>
            </table>
            <form method="POST" class="form-group" action="{{route('contract')}}">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6 text-center">
                        <b>Шуудан хүлээн авах хаяг</b>
                        <input type="text" class="form-control" name="location" required placeholder="1, Beomgok-ro, Dong-gu, Busan, 48723, REP. OF KOREA">
                    </div>
                    <input type="hidden" name="block" value="{{$block}}">
                    <input type="hidden" name="floor" value="{{$floor}}">
                    <input type="hidden" name="design" value="{{$design->id}}">
                    <div class="col-md-3"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-white">ГЭРЭЭ ШУУДАНГААР ХҮЛЭЭН АВАХ</button>
                    </div>
                </div>

            </form>
        </div><!-- col-->
        <div class="col-md-2"></div><!-- col-->
    </div><!--row-->



</div><!-- PAGE CONTENT -->
    @endsection