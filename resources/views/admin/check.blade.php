@extends('layouts.main')
@section('header')
@endsection
@section('content')

    <div class = "content">
    <div class="row">
        <div class="col-md-3">

            <div class="card-box">
                <h4 class="m-t-0 m-b-30 header-title text-center">Байрны мэдээлэл</h4>
                <form action="{{route('check')}}" method="post" >
                    {{csrf_field()}}
                    <div class="col-12">

                        <select name="block" id="" class="form-control">
                            @if ($request)
                            @if($request->block == 1)
                                <option value="{{$request->block}}">А блок</option>
                                <option value="2">B блок</option>
                                <option value="3">C блок</option>
                            @elseif($request->block == 2)
                                <option value="{{$request->block}}">B блок</option>
                                <option value="1">A блок</option>
                                <option value="3">C блок</option>
                            @elseif($request->block == 3)
                                <option value="{{$request->block}}">C блок</option>
                                <option value="1">A блок</option>
                                <option value="2">B блок</option>

                                @endif
                            @else
                                <option value="1">A блок</option>
                                <option value="2">B блок</option>
                                <option value="3">C блок</option>
                            @endif
                        </select>
                        <br>
                        <select name="floor" id="" class="form-control">
                            @if($request)
                            <option value="{{$request->floor}}">{{$request->floor}} давхар</option>
                            @for($i = 1; $i<=12;$i++)
                                @if($i == $request->floor)
                                    @else
                                    <option value="{{$i}}">{{$i}} давхар</option>
                                @endif
                            @endfor
                            @else
                                @for($i = 1; $i<=12;$i++)
                                        <option value="{{$i}}">{{$i}} давхар</option>
                                @endfor
                            @endif
                        </select>
                        <br>
                        <select name="model" id="" class="form-control">
                            @if($request)
                            <option value="{{$request->model}}">{{\App\Design::find($request->model)->name}}</option>
                            @for($i = 1; $i<=11;$i++)
                                @if($i == $request->model)
                                @else
                                    <option value="{{$i}}">{{\App\Design::find($i)->name}}</option>
                                @endif

                            @endfor
                                @else
                                @for($i = 1; $i<=11;$i++)
                                        <option value="{{$i}}">{{\App\Design::find($i)->name}}</option>

                                @endfor

                                @endif
                        </select>
                        <br>
                        <button class="btn btn-info btn-danger btn-block" type="submit">Шалгах</button>

                    </div>
                    <br>

                </form>
            </div>

        </div><!-- end col-->
        @if($check==1)
                <div class="col-xl-3 col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card">
                            <div class="">
                                <h3 class="m-b-5">{{$user->name}}  {{$user->last_name}}</h3>
                                <p class="text-muted"><h4>Утас:{{$user->phone_number}}</h4></p>

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

                        </div>
                    </div> <!-- end card-box -->
                </div> <!-- end col -->


                @if($rela->state == 0)
                    <div class="col-xl-3 col-lg-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="">
                                    <h3 class="m-b-5">Гэрээний мэдээлэл</h3>
                                    <br>
                                    <h4>Гэрээний хүсэлттэй</h4>
                                </div>

                                <div class="text-left m-t-40">

                                    <p class="text-highlight-dark font-13"><strong>Шуудангийн хаяг :</strong><span class="m-l-15">{{$user->location}}</span></p>

                                </div>
                            </div>
                        </div> <!-- end card-box -->
                    </div>
                @elseif($rela->state == 1)
                    <div class="col-xl-3 col-lg-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="">
                                    <h3 class="m-b-5">Гэрээний мэдээлэл</h3>
                                </div>

                                <div class="text-left m-t-40">

                                    <p class="text-highlight-dark font-13"><strong>Гэрээ явуулсан огноо :</strong><span class="m-l-15"> {{$user->contract->sent_date}}</span></p>

                                </div>
                            </div>
                        </div> <!-- end card-box -->
                    </div>
                @elseif($rela->state == 2 or $rela->state == 3)
                    <div class="col-xl-3 col-lg-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="">
                                    <h3 class="m-b-5">Гэрээний мэдээлэл</h3>
                                </div>

                                <div class="text-left m-t-40">

                                    <p class="text-danger font-13"><strong>Гэрээ амжилттай хийгдсэн</strong></p>
                                    <p class="text-highlight-dark font-13"><strong>Гэрээ хийсэн огноо :</strong><span class="m-l-15">{{$user->contract->completed_date}}</span></p>

                                </div>

                            </div>
                        </div> <!-- end card-box -->
                    </div>
                @endif
                @if($rela->state == 0 or $rela->state==1 or $rela->state==2)
                    <div class="col-xl-3 col-lg-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="">
                                    <h3 class="m-b-5">Төлбөрийн мэдээлэл</h3>
                                </div>
                                <div class="text-left m-t-40">

                                    <p class="text-highlight-dark font-13"><strong>Төлөх нийт үнэ :</strong><span class="m-l-15">{{$total}} төгрөг</span></p>
                                </div>

                            </div>
                        </div> <!-- end card-box -->
                    </div>

                @elseif($rela->state == 3)
                    <div class="col-xl-3 col-lg-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="">
                                    <h3 class="m-b-5">Төлбөрийн мэдээлэл</h3>
                                </div>
                                <div class="text-left m-t-40">
                                    <p class="text-danger font-13"><strong>Төлбөр амжилттай төлөгдсөн</strong><span class="m-l-15"></span></p>
                                    <p class="text-highlight-dark font-13"><strong>Төлбөр төлсөн огноо :</strong><span class="m-l-15">{{$user->contract->purchased_date}}</span></p>
                                </div>
                            </div>
                        </div> <!-- end card-box -->
                    </div>
                @endif


        @elseif($check==2)
            <div class="col-md-9">
                <div class="card-box">
                    <br>
                    <h1 class="text-center">Энэ байрыг захиалах боломжтой </h1>
                </div>
            </div>
        @else
        @endif
    </div>

@stop
@section('footer')
@endsection