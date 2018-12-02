@extends('layouts.front')
@section('menu')
    <li class="megamenu">
        <a href="{{route('welcome')}} ">Танилцуулга</a>
    </li>
    <li class="dropdown">
        <a href="{{route('models')}}">Байрны сонголтууд</a>
    </li>
    <li class="dropdown">
        <a class="waves" href="{{url('blog')}}">Нийтлэлүүд</a>
    </li>
    <li class="megamenu active">
        <a href="{{url('user')}}">Нэвтрэх</a>
    </li>

@endsection
@section('content')
   <br>


    <!-- slider-->
    <div class="headline text-center no-margin-bottom">


        <h6>PYRAMID APARTMENT</h6>
        <!--<h3 id="blocka">БҮРТГҮҮЛЭХ</h3>-->
        <br>




    </div><!-- headline -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-box">
                    <ul class="nav nav-tabs tabs-bordered nav-justified">

                        <li class="nav-item">
                            <a href="#login" data-toggle="tab" aria-expanded="true" class="nav-link">
                                Нэвтрэх
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div id="login" class="tab-pane active">
                            <form method="POST" action="{{ route('log') }}" aria-label="">
                                @csrf


                                <div class="form-group row">

                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <input id="login_email" type="email" class="form-control" name="email"  required placeholder="Цахим хаяг*">

                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <input id="login_password" type="password" class="form-control" name="password"  required placeholder="Нууц үг*">

                                    </div>
                                    <div class="col-md-1"></div>
                                </div>


                                <br>
                                <div class="form-group row mb-0">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-md btn-primary btn-block">
                                            Нэвтрэх
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