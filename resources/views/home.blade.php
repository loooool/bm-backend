@extends('layouts.main')
@section('header')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
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
        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"> хандалт (загвар тус бүрээр)</h4>
                    <div class="ct-chart ct-golden-section" id="chart1"></div>
                </div>
            </div>


            <?php $hours = [6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22];?>
            <script>
                var data = {
                    labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'],
                    series: [
                        [{{$counter->a}}, {{$counter->b}}, {{$counter->c}}, {{$counter->d}}, {{$counter->e}}, {{$counter->f}}, {{$counter->g}},
                            {{$counter->h}}, {{$counter->i}}, {{$counter->j}}, {{$counter->k}}],
                    ]
                };

                var options = {
                    seriesBarDistance: 10
                };

                var responsiveOptions = [
                    ['screen and (max-width: 640px)', {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function (value) {
                                return value[0];
                            }
                        }
                    }]
                ];

                new Chartist.Bar('.ct-chart', data, options, responsiveOptions);
            </script>
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



    </div>
@endsection
@section('footer')
@endsection