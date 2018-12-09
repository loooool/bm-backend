@extends('layouts.front')

@section('header')
    <style>
        svg, defs, clipPath {
            height: 0;
            position: absolute;
            top: 0;
            left: 0;
        }

        #figura {
            position: relative;
            width: 700px;
            height: 525px;
            margin: 10px auto;
            overflow: hidden;
            background-color: white;
            border-radius: 20px;
        }

        #figura::before {
            display: block;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            background-image: url('{{asset('front/assets/images/floor.jpg')}}');
            background-size: cover;
            opacity: .4;
            width: 700px;
            height: 525px;
        }

        #capaRecorte {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 700px;
            height: 525px;
        }

        #imagen {
            width: 700px;
            height: 525px;
            position: absolute;
            top: 0;
            left: 0;
            cursor: crosshair;
        }

        #figura area {
            display: block;
        }

        #figura area:nth-of-type(1):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(217px 83px, 602px 85px, 602px 120px, 217px 118px);
            clip-path: url(#F1);
        }

        #figura area:nth-of-type(2):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(217px 118px, 602px 119px, 603px 154px, 217px 153px);
            clip-path: url(#F2);
        }

        #figura area:nth-of-type(3):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(217px 154px, 603px 155px, 604px 187px, 217px 188px);
            clip-path: url(#F3);
        }

        #figura area:nth-of-type(4):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(218px 189px, 603px 188px, 603px 223px, 217px 222px);
            clip-path: url(#F4);
        }

        #figura area:nth-of-type(5):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(217px 223px, 604px 224px, 605px 258px, 217px 257px);
            clip-path: url(#F5);
        }

        #figura area:nth-of-type(6):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(217px 258px, 605px 257px, 604px 292px, 218px 291px);
            clip-path: url(#F6);
        }

        #figura area:nth-of-type(7):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(217px 291px, 603px 293px, 604px 324px, 217px 324px);
            clip-path: url(#F7);
        }

        #figura area:nth-of-type(8):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(219px 324px, 603px 323px, 604px 360px, 219px 359px);
            clip-path: url(#F8);
        }

        #figura area:nth-of-type(9):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(219px 359px, 604px 361px, 604px 394px, 219px 394px);
            clip-path: url(#F9);
        }

        #figura area:nth-of-type(10):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(220px 394px, 604px 395px, 604px 428px, 219px 427px);
            clip-path: url(#F10);
        }

        #figura area:nth-of-type(11):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(220px 428px, 604px 428px, 603px 465px, 220px 462px);
            clip-path: url(#F11);
        }

        #figura area:nth-of-type(12):hover ~ #capaRecorte {
            -webkit-clip-path: polygon(220px 463px, 604px 464px, 604px 499px, 221px 496px);
            clip-path: url(#F12);
        }


    </style>
@endsection
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
            <div class="col-md-2 text-center"><h5>ДАВХАР</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БҮРТГҮҮЛЭХ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">ГЭРЭЭ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БАТАЛГААЖУУЛАХ</h5></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="progress">
                    <div class="progress-bar" data-width="48">
                    </div><!-- progress-bar -->
                </div><!-- progress -->
            </div><!-- col-->
        </div><!-- row-->
    </div><!-- container-->
    <br>



    <!-- slider-->
    <div class="headline text-center no-margin-bottom">


        <h6>PYRAMID APARTMENT</h6>
        <h3 id="blocka">@if(session('not_empty')){{session('not_empty')}}@elseДАВХАР СОНГОХ@endif</h3>
        <br>


    </div><!-- headline -->

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <table class="table">
                <tr>
                    <td>{{$design->name}}</td>
                    @if($block == 1)
                        <td>A блок</td>
                    @elseif($block == 2)
                        <td>B блок</td>
                    @elseif($block ==3)
                        <td>C блок</td>
                    @endif
                </tr>
            </table>
            <div class="image-map-container">

                <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <clipPath id=F1>
                            <polygon points="217 83,602 85,602 120,217 118"></polygon>
                        </clipPath>
                        <clipPath id=F2>
                            <polygon points="217 118,602 119,603 154,217 153"></polygon>
                        </clipPath>
                        <clipPath id=F3>
                            <polygon points="217 154,603 155,604 187,217 188"></polygon>
                        </clipPath>
                        <clipPath id=F4>
                            <polygon points="218 189,603 188,603 223,217 222"></polygon>
                        </clipPath>
                        <clipPath id=F5>
                            <polygon points="217 223,604 224,605 258,217 257"></polygon>
                        </clipPath>
                        <clipPath id=F6>
                            <polygon points="217 258,605 257,604 292,218 291"></polygon>
                        </clipPath>
                        <clipPath id=F7>
                            <polygon points="217 291,603 293,604 324,217 324"></polygon>
                        </clipPath>
                        <clipPath id=F8>
                            <polygon points="219 324,603 323,604 360,219 359"></polygon>
                        </clipPath>
                        <clipPath id=F9>
                            <polygon points="219 359,604 361,604 394,219 394"></polygon>
                        </clipPath>
                        <clipPath id=F10>
                            <polygon points="220 394,604 395,604 428,219 427"></polygon>
                        </clipPath>
                        <clipPath id=F11>
                            <polygon points="220 428,604 428,603 465,220 462"></polygon>
                        </clipPath>
                        <clipPath id=F12>
                            <polygon points="220 463,604 464,604 499,221 496"></polygon>
                        </clipPath>
                    </defs>
                </svg>

                <figure id=figura>
                    <map name=recortes id=recortes>
                        <area shape=poly data-toggle="tooltip" title="Дараад давхараа сонгоно уу"
                              @if($design->id == 1 or $design->id == 2 or $design->id == 9 ) @else
                              <?php $relation = $relations ?>
                              @if(empty($relation->where('floor_id', 12)->first()))
                              onmouseover="hoverText('12-р давхар')"
                              coords="217,83,602,85,602,120,217,118"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/12')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="217,83,602,85,602,120,217,118"
                                @endif
                                @endif>
                        <area shape=poly data-toggle="tooltip" title="Дараад давхараа сонгоно уу"
                              @if($design->id == 1 or $design->id == 2 or $design->id == 9 )@else
                              <?php $relation = $relations ?>
                              @if(empty($relation->where('floor_id', 11)->first()))
                              onmouseover="hoverText('11-р давхар')"
                              coords="217,118,602,119,603,154,217,153"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/11')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="217,118,602,119,603,154,217,153"
                                @endif
                                @endif>

                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 1 or $design->id == 2 or $design->id == 9 ) @else
                              <?php $relation = $relations ?>
                              @if(empty($relation->where('floor_id', 10)->first()))
                              onmouseover="hoverText('10-р давхар')"
                              coords="217,154,603,155,604,187,217,188"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/10')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="217,154,603,155,604,187,217,188"
                                @endif
                                @endif>
                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 1 or $design->id == 2 or $design->id == 9 ) @else
                              <?php $relation = $relations ?>
                              @if(empty($relation->where('floor_id', 9)->first()))
                              onmouseover="hoverText('9-р давхар')"
                              coords="218,189,603,188,603,223,217,222"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/9')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="218,189,603,188,603,223,217,222"
                                @endif
                                @endif>
                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 1 or $design->id == 2 or $design->id == 9 ) @else
                              <?php $relation = $relations ?>
                              @if(empty($relation->where('floor_id', 8)->first()))
                              onmouseover="hoverText('8-р давхар')"
                              coords="217,223,604,224,605,258,217,257"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/8')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="217,223,604,224,605,258,217,257"
                                @endif
                                @endif>
                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 1 or $design->id == 2 or $design->id == 9 ) @else
                              <?php $relation = $relations ?>
                              @if(empty($relation->where('floor_id', 7)->first()))
                              onmouseover="hoverText('7-р давхар')"
                              coords="217,258,605,257,604,292,218,291"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/7')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="217,258,605,257,604,292,218,291"
                              @endif
                              @endif >
                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 1 or $design->id == 2 or $design->id == 9 ) @else
                              @if(empty($relations->where('floor_id', 6)->first()))
                              onmouseover="hoverText('6-р давхар')"
                              coords="217,291,603,293,604,324,217,324"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/6')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="217,291,603,293,604,324,217,324"
                                @endif
                              @endif>
                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 1 or $design->id == 2 or $design->id == 9 ) @else
                              @if(empty($relations->where('floor_id', 5)->first()))
                              onmouseover="hoverText('5-р давхар')"
                              coords="219,324,603,323,604,360,219,359"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/5')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="219,324,603,323,604,360,219,359"
                              @endif
                               @endif>
                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 1 or $design->id == 2 or $design->id == 9 ) @else
                              @if(empty($relations->where('floor_id', 4)->first()))
                              onmouseover="hoverText('4-р давхар')"
                              coords="219,359,604,361,604,394,219,394"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/4')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="219,359,604,361,604,394,219,394"
                              @endif
                                @endif>
                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 10 or $design->id == 11 ) @else
                              @if(empty($relations->where('floor_id', 3)->first()))
                              onmouseover="hoverText('3-р давхар')"
                              coords="220,394,604,395,604,428,219,427"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/3')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="220,394,604,395,604,428,219,427"
                              @endif
                               @endif >
                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 10 or $design->id == 11 ) @else
                              @if(empty($relations->where('floor_id', 2)->first()))
                              onmouseover="hoverText('2-р давхар')"
                              coords="220,428,604,428,603,465,220,462"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/2')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="220,428,604,428,603,465,220,462"
                              @endif
                               @endif>
                        <area shape=poly data-toggle="tooltip"
                              title="Дараад давхараа сонгоно уу"
                              @if($design->id == 10 or $design->id == 11 ) @else
                              @if(empty($relations->where('floor_id', 1)->first()))
                              onmouseover="hoverText('1-р давхар')"
                              coords="220,463,604,464,604,499,221,496"
                              href="{{url('/models/'.$design->id.'/block/'.$block.'/floor/1')}}"
                              @else
                              onmouseover="hoverText('Уучлаарай захиалгатай байр байна')"
                              coords="220,463,604,464,604,499,221,496"
                                @endif
                              @endif >

                        <img id=capaRecorte src="{{asset('front/assets/images/floor.jpg')}}">
                    </map>

                    <img src="https://lh3.googleusercontent.com/-HqFCpcmlv1U/VjZqE6e7u0I/AAAAAAAAGao/hIQohrsu0xI/s800-Ic42/transparente.gif"
                         id=imagen alt="" usemap=#recortes>

                </figure>
                <div class="map-selector">

                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>
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