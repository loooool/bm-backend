@extends('layouts.main')
@section('header')
@endsection
@section('content')
<div class = "content">
    @if(session('error'))
        <h1>Захиалга давхцлаа</h1>
    @endif
    <div class="row">
        <div class="col-md-3">

            <div class="card-box">
                <h4 class="m-t-0 m-b-30 header-title text-center">Байрны мэдээлэл</h4>



                <form action="{{route('manual')}}" method="post" >
                {{csrf_field()}}
                <div class="col-12">

                        <select name="block" id="" class="form-control">
                        <option value="1">A блок</option>
                        <option value="2">B блок</option>
                        <option value="3">C блок</option>
                        </select>
                    <br>
                        <select name="floor" id="" class="form-control">
                            <option value="1">1 давхар</option>
                            <option value="2">2 давхар</option>
                            <option value="3">3 давхар</option>
                            <option value="4">4 давхар</option>
                            <option value="5">5 давхар</option>
                            <option value="6">6 давхар</option>
                            <option value="7">7 давхар</option>
                            <option value="8">8 давхар</option>
                            <option value="9">9 давхар</option>
                            <option value="10">10 давхар</option>
                            <option value="11">11 давхар</option>
                            <option value="12">12 давхар</option>
                        </select>
                    <br>
                    <select name="model" id="" class="form-control">
                        <option value="1">A загвар</option>
                        <option value="2">B загвар</option>
                        <option value="3">C загвар</option>
                        <option value="4">D загвар</option>
                        <option value="5">E загвар</option>
                        <option value="6">F загвар</option>
                        <option value="7">G загвар</option>
                        <option value="8">H загвар</option>
                        <option value="9">I загвар</option>
                        <option value="10">J загвар</option>
                        <option value="11">K загвар</option>
                    </select>
                    <br>
                    <input type="text" class="form-control" placeholder="Овог" name="last_name">
                    <br>
                    <input type="text" class="form-control" placeholder="Нэр" name="name">
                    <br>
                    <input type="text" class="form-control" placeholder="Регистрийн дугаар" name="register_number">
                    <br>
                    <input type="text" class="form-control" placeholder="Утасны дугаар" name="phone_number">
                    <br>
                    <input type="text" class="form-control" placeholder="Цахим хаяг" name="email">


                </div>
                <br>
                <button class="btn btn-info btn-block" type="submit">Мэдээлэл оруулах</button>

            </form>
            </div>

        </div><!-- end col-->
        <div class="col-md-9">


            <div class="card-box">


                <table class="table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Захиалагч</th>
                        <th>Блок</th>
                        <th>Давхар</th>
                        <th>Загвар</th>
                        <th>Огноо</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $id =1?>
                        @foreach($infos as $info)
                            <tr>
                        <td>{{$id}}</td>
                        <td>{{$info->user->name}}</td>

                        @if($info->block_id == 1)
                        <td>A</td>
                            @elseif($info->block_id == 2)
                         <td>B</td>
                            @elseif($info->block_id == 3)
                                <td>C</td>
                            @endif
                                <td>{{$info->floor_id}}</td>
                                @if($info->model_id == 1)
                                    <td>A</td>
                                @elseif($info->model_id == 2)
                                    <td>B</td>
                                @elseif($info->model_id == 3)
                                    <td>C</td>
                                @elseif($info->model_id == 4)
                                    <td>D</td>
                                @elseif($info->model_id == 5)
                                    <td>E</td>
                                @elseif($info->model_id == 6)
                                    <td>F</td>
                                @elseif($info->model_id == 7)
                                    <td>G</td>
                                @elseif($info->model_id == 8)
                                    <td>H</td>
                                @elseif($info->model_id == 9)
                                    <td>I</td>
                                @elseif($info->model_id == 10)
                                    <td>J</td>
                                @elseif($info->model_id == 11)
                                    <td>K</td>
                                @endif
                                <td>{{$info->created_at}}</td>
                            </tr>
                            <?php $id = $id +1?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- end col-->
    </div><!-- end row-->

</div>


@stop
@section('footer')
@endsection