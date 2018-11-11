@extends('layouts.main')
@section('header')
@endsection
@section('content')
    <div class="content">
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="">
                        <h3 class="m-b-5">{{$user->name}}  {{$user->last_name}}</h3>
                        <p class="text-muted"><h4>{{$user->phone_number}}</h4></p>
                    </div>
                    {{--<button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>--}}
                    {{--<button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>--}}

                    <div class="text-left m-t-40">

                        <p class="text-highlight-dark font-13"><strong>Регистр :</strong><span class="m-l-15">{{$user->register_number}}</span></p>

                        <p class="text-highlight-dark font-13"><strong>Email :</strong> <span class="m-l-15">{{$user->email}}</span></p>


                        <p class="text-highlight-dark font-13"><strong>Улс :</strong> <span class="m-l-15">
                        @if($user->country == "mn")
                                    Mongolia
                                @endif </span></p>
                    </div>



                    {{--<ul class="social-links list-inline m-t-30">--}}
                        {{--<li class="list-inline-item">--}}
                            {{--<a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>--}}
                        {{--</li>--}}
                        {{--<li class="list-inline-item">--}}
                            {{--<a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>--}}
                        {{--</li>--}}
                        {{--<li class="list-inline-item">--}}
                            {{--<a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-xl-3 col-lg-4">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="">
                        <h3 class="m-b-5">Байрны мэдээлэл</h3>

                    </div>
                    {{--<button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>--}}
                    {{--<button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>--}}

                    <div class="text-left m-t-40">

                        <p class="text-highlight-dark font-13"><strong>Блок :</strong><span class="m-l-15">@if($rela->block_id == 1)
                                    <td>A</td>
                                @elseif($rela->block_id == 2)
                                    <td>B</td>
                                @elseif($rela->block_id == 3)
                                    <td>C</td>
                                @endif</span></p>

                        <p class="text-highlight-dark font-13"><strong>Давхар :</strong> <span class="m-l-15"> {{$rela->floor_id}}  </span></p>


                        <p class="text-highlight-dark font-13"><strong>Загвар :</strong> <span class="m-l-15">  @if($rela->model_id == 1)
                                    <td>A</td>
                                @elseif($rela->model_id == 2)
                                    <td>B</td>
                                @elseif($rela->model_id == 3)
                                    <td>C</td>
                                @elseif($rela->model_id == 4)
                                    <td>D</td>
                                @elseif($rela->model_id == 5)
                                    <td>E</td>
                                @elseif($rela->model_id == 6)
                                    <td>F</td>
                                @elseif($rela->model_id == 7)
                                    <td>G</td>
                                @elseif($rela->model_id == 8)
                                    <td>H</td>
                                @elseif($rela->model_id == 9)
                                    <td>I</td>
                                @elseif($rela->model_id == 10)
                                    <td>J</td>
                                @elseif($rela->model_id == 11)
                                    <td>K</td>
                                @endif</span></p>
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-xl-3 col-lg-4">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="">
                        <h3 class="m-b-5">Гэрээний мэдээлэл</h3>
                    </div>

                    <div class="text-left m-t-40">

                        <p class="text-highlight-dark font-13"><strong>Шуудангийн хаяг :</strong><span class="m-l-15">{{$user->register_number}}</span></p>

                    </div>
                    <button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Гэрээ явуулсан</button>

                </div>
            </div> <!-- end card-box -->
        </div>

        <div class="col-xl-3 col-lg-4">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="">
                        <h3 class="m-b-5">Төлбөрийн мэдээлэл</h3>
                    </div>
                    <div class="text-left m-t-40">

                        <p class="text-highlight-dark font-13"><strong>Төлөх нийт үнэ :</strong><span class="m-l-15">{{$user->register_number}}</span></p>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Төлбөр төлөгдсөн</button>

                </div>
            </div> <!-- end card-box -->
        </div>




    </div> <!-- end col -->
    </div>
@endsection
@section('footer')
@endsection