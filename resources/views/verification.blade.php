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
            <div class="col-md-2 text-center"><h5 >БҮРТГҮҮЛЭХ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">ГЭРЭЭ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БАТАЛГААЖУУЛАХ</h5></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="progress">
                    <div class="progress-bar" data-width="66">
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
        @if(session('error'))
            <p>Уучлаарай таны код буруу байна<br>Та доорх утга оруулах хэсэгт кодоо оруулна уу</p>
        @else
        <p>Бид таны утасны дугаарлуу мессежээр баталгаажуулах код илгээнэ<br>Та доорх утга оруулах хэсэгт кодоо оруулна уу</p>
        @endif



    </div><!-- headline -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-box">

                    <div class="tab-content">

                        <div id="register" class="tab-pane active">
                            <form method="POST" action="{{route('verification')}}" >
                                @csrf
                                <div class="form-group row">

                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <input type="text"  id="reg" class="form-control" name="verification_code"  required placeholder="Баталгаажуулах код*">
                                    </div>
                                    <input type="hidden" name="block" value="{{$block}}">
                                    <input type="hidden" name="design" value="{{$design}}">
                                    <input type="hidden" name="floor" value="{{$floor}}">
                                    <div class="col-md-1"></div>
                                </div>



                                <br>
                                <div class="form-group row mb-0">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-md btn-primary btn-block">
                                            Баталгаажуулах
                                        </button>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>





@endsection
@section('footer')
@endsection