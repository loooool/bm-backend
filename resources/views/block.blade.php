@extends('layouts.front')

@section('header')
    <style>
        svg, defs, clipPath {
            height: 0;
            position: absolute;
            top: 0; left: 0;
        }

        #figura {
            position: relative;
            width: 700px; height: 525px;
            margin: 10px auto;
            overflow: hidden;
            background-color: white;
            border-radius: 20px;
        }
        #figura::before {
            display: block;
            content: "";
            position: absolute;
            top: 0; left: 0;
            background-image: url('{{asset('front/assets/images/pyramid_min.jpg')}}');
            background-size: cover;
            opacity: .4;
            width: 700px; height: 525px;
        }

        #capaRecorte {
            display: block;
            position: absolute;
            top: 0; left: 0;
            width: 700px; height: 525px;
        }

        #imagen {
            width: 700px; height: 525px;
            position: absolute;
            top: 0; left: 0;
            cursor: crosshair;
        }

        #figura area {
            display: block;
        }

        #figura area:nth-of-type(1):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(257px 485px,249px 492px,224px 479px,218px 485px,138px 438px,116px 425px,45px 331px,26px 321px,51px 296px,60px 300px,71px 291px,68px 286px,96px 259px,94px 253px,129px 217px,151px 226px,154px 233px,180px 246px,183px 243px,230px 265px,226px 272px,228px 276px,231px 275px,243px 280px,246px 278px,259px 283px,264px 281px,307px 301px,293px 321px,304px 392px,306px 407px,303px 421px,294px 439px,274px 470px,265px 482px);
            clip-path: url(#A1);
        }

        #figura area:nth-of-type(2):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(307px 301px,265px 281px,260px 283px,256px 276px,230px 154px,218px 140px,250px 124px,250px 115px,282px 101px,296px 114px,312px 107px,311px 103px,317px 99px,309px 89px,337px 75px,342px 82px,368px 69px,383px 83px,383px 93px,387px 98px,392px 96px,409px 110px,413px 108px,443px 134px,432px 142px,417px 262px,385px 282px,390px 287px,388px 299px,392px 306px,379px 312px,370px 306px,358px 313px,350px 303px,305px 327px,296px 320px,295px 318px);
            clip-path: url(#B1);
        }

        #figura area:nth-of-type(3):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(433px 125px,435px 116px,439px 112px,429px 102px,462px 84px,466px 88px,486px 77px,491px 79px,496px 76px,498px 66px,517px 57px,538px 72px,546px 68px,571px 85px,558px 94px,564px 98px,562px 104px,575px 112px,595px 102px,624px 122px,620px 130px,651px 153px,634px 165px,574px 284px,515px 323px,471px 289px,463px 291px,453px 285px,445px 290px,433px 280px,437px 271px,438px 262px,443px 259px,421px 241px);
            clip-path: url(#A2);
        }



    </style>
@endsection
@section('menu')
    <li class="megamenu">
        <a href="{{route('welcome')}} ">Танилцуулга</a>
    </li>
    <li class="dropdown  active">
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
            <div class="col-md-2 text-center"><h5 >БЛОК</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">ДАВХАР</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БҮРТГҮҮЛЭХ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">ГЭРЭЭ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БАТАЛГААЖУУЛАХ</h5></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="progress">
                    <div class="progress-bar" data-width="33">
                    </div><!-- progress-bar -->
                </div><!-- progress -->
            </div><!-- col-->
        </div><!-- row-->
    </div><!-- container-->
    <br>



    <!-- slider-->
    <div class="headline text-center no-margin-bottom">


        <h6>PYRAMID APARTMENT</h6>
        <h3 id="blocka">БЛОК СОНГОХ</h3>
        <br>



    </div><!-- headline -->

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <table class="table">
                <tr>
                    <td>{{$design->name}}</td>
                </tr>
            </table>
            <div class="image-map-container">

                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"  >
                    <defs>
                        <clipPath id=A1>
                            <polygon points="257 485,249 492,224 479,218 485,138 438,116 425,45 331,26 321,51 296,60 300,71 291,68 286,96 259,94 253,129 217,151 226,154 233,180 246,183 243,230 265,226 272,228 276,231 275,243 280,246 278,259 283,264 281,307 301,293 321,304 392,306 407,303 421,294 439,274 470,265 482"></polygon>
                        </clipPath>
                        <clipPath id=B1>
                            <polygon points="307 301,265 281,260 283,256 276,230 154,218 140,250 124,250 115,282 101,296 114,312 107,311 103,317 99,309 89,337 75,342 82,368 69,383 83,383 93,387 98,392 96,409 110,413 108,443 134,432 142,417 262,385 282,390 287,388 299,392 306,379 312,370 306,358 313,350 303,305 327,296 320,295 318"></polygon>
                        </clipPath>
                        <clipPath id=A2>
                            <polygon points="433 125,435 116,439 112,429 102,462 84,466 88,486 77,491 79,496 76,498 66,517 57,538 72,546 68,571 85,558 94,564 98,562 104,575 112,595 102,624 122,620 130,651 153,634 165,574 284,515 323,471 289,463 291,453 285,445 290,433 280,437 271,438 262,443 259,421 241"></polygon>
                        </clipPath>
                    </defs>
                </svg>

                <figure id=figura>
                    <map name=recortes id=recortes>
                        <area onmouseover="hoverText('C блок 2020 оны 2р улирал')" shape=poly data-toggle="tooltip" title="Дараад блокоо сонгоно уу"
                              coords="257,485,249,492,224,479,218,485,138,438,116,425,45,331,26,321,51,296,60,300,71,291,68,286,96,259,94,253,129,217,151,226,154,233,180,246,183,243,230,265,226,272,228,276,231,275,243,280,246,278,259,283,264,281,307,301,293,321,304,392,306,407,303,421,294,439,274,470,265,482"
                              href="{{route('block.choose', ['design'=>$design->id, 'block'=>3])}}" >
                        <area onmouseover="hoverText('A блок 2019 оны 4р улирал')" shape=poly data-toggle="tooltip" title="Дараад блокоо сонгоно уу"
                              coords="307,301,265,281,260,283,256,276,230,154,218,140,250,124,250,115,282,101,296,114,312,107,311,103,317,99,309,89,337,75,342,82,368,69,383,83,383,93,387,98,392,96,409,110,413,108,443,134,432,142,417,262,385,282,390,287,388,299,392,306,379,312,370,306,358,313,350,303,305,327,296,320,295,318"
                              href="{{route('block.choose', ['design'=>$design->id, 'block'=>1])}}" >
                        <area onmouseover="hoverText('B блок 2019 оны 4р улирал')" shape=poly data-toggle="tooltip" title="Дараад блокоо сонгоно уу"
                              coords="433,125,435,116,439,112,429,102,462,84,466,88,486,77,491,79,496,76,498,66,517,57,538,72,546,68,571,85,558,94,564,98,562,104,575,112,595,102,624,122,620,130,651,153,634,165,574,284,515,323,471,289,463,291,453,285,445,290,433,280,437,271,438,262,443,259,421,241"
                              href="{{route('block.choose', ['design'=>$design->id, 'block'=>2])}}" >

                        <img id=capaRecorte src="{{asset('front/assets/images/pyramid_min.jpg')}}" >
                    </map>

                    <img src="https://lh3.googleusercontent.com/-HqFCpcmlv1U/VjZqE6e7u0I/AAAAAAAAGao/hIQohrsu0xI/s800-Ic42/transparente.gif"
                         id=imagen alt="" usemap=#recortes >

                </figure>
                <div class="map-selector">

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- end slider-->
    @endsection
@section('footer')
    <script>
        function hoverText(txt) {
            document.getElementById("blocka").innerHTML = txt;
        }
    </script>
    @endsection