@extends('layouts.main')
@section('header')
@endsection
@section('content')
    <div class = "content">
        <div class="row">
            <div class="col-md-5">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title text-center">Нийтлэлийн мэдээлэл</h4>
                    <form action="{{route('blog')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="col-12">
                            <textarea name="title" placeholder="Гарчиг" id="" cols="60" rows="2"></textarea>
                            <br>
                            <textarea name="content" placeholder="Нийтлэл" id="" cols="60" rows="10"></textarea>

                            <br>
                            <div class="fileupload btn btn-secondary waves-effect">
                                <span><i class="ion-upload m-r-5"></i>Зураг оруулах</span>
                                <input type="file" name="photo" accept="image/*" class="upload">
                            </div>
                            <br>
                            <br>
                            <textarea name="video" placeholder="Бичлэгний линкээ оруулна уу" id="" cols="60" rows="5"></textarea>

                            <button class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light" type="submit">Нийтлэл оруулах</button>
                        </div>
                        <br>


                </form>
            </div><!-- end col-->
            </div><!-- end col-->
            <div class="col-md-7">
                <div class="card-box">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Гарчиг</th>
                            <th>Зураг</th>
                            <th>Огноо</th>
                            <th>Үйлдэл</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $id =1?>
                        @foreach($blog as $blo)

                            <tr>
                                <td>{{$id}}</td>
                                <td>{{$blo->title}}</td>
                                @if($blo->photos->first() == '')
                                    <td>Зураггүй</td>
                                @else
                                    <td><img width="50px" src="{{asset('assets/images/uploads/'.$blo->photos->first()->path)}}"></td>
                                @endif
                                <td>{{$blo->created_at}}</td>
                                <td><a href="{{url('/home/blog').'/'.$blo->id}}"><i style="font-size: 20px" class="mdi mdi-delete"></i></a></td>
                            <?php $id = $id +1?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- end col-->
        </div><!-- end row-->

    </div>
    </div>

@endsection
@section('footer')
@endsection