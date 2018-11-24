@extends('layouts.main')
@section('header')
@endsection
@section('content')
    <div class="content">
    <div class="row">
        <div class="col-lg-6 col-xl-3">
            <div class="widget-bg-color-icon card-box">
                <div class="bg-icon bg-icon-success pull-left">
                    <i class=" ti-user text-success"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark m-t-10"><b class="counter"> {{$user->count()}}</b></h3>
                    <p class="text-dark mb-0"> Хэрэглэгчид  </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


        <div class="col-lg-6 col-xl-3">
            <div class="widget-bg-color-icon card-box">
                <div class="bg-icon bg-icon-danger pull-left">
                    <i class="ti-write text-pink"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark m-t-10">
                        <b class="counter">{{$user1->count()}}</b></h3>
                    <p class="text-dark mb-0">Хүлээгдэж буй гэрээ </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-lg-6 col-xl-3">
            <div class="widget-bg-color-icon card-box">
                <div class="bg-icon bg-icon-purple pull-left">
                    <i class="ti-check text-purple"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark m-t-10"><b class="counter">{{$user2->count()}}</b></h3>
                    <p class="text-dark mb-0">Хийгдсэн гэрээ  </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3">
            <div class="widget-bg-color-icon card-box">
                <div class="bg-icon bg-icon-purple pull-left">
                    <i class="ti-home text-purple"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark m-t-10"><b class="counter">{{$user3->count()}}</b></h3>
                    <p class="text-dark mb-0">Зарагдсан байр  </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
        <div class="col-lg-6 col-xl-3">
            <div class="widget-bg-color-icon card-box fadeInDown animated">
                <div class="bg-icon bg-icon-primary pull-left">
                    <i class=" ti-cloud-up text-info"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark m-t-10"><b class="counter">{{$counter->views}}</b></h3>
                    <p class="text-dark mb-0">Нийт хэдэн хүн орж үзсэн  </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection