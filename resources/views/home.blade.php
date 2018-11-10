@extends('layouts.main')
@section('header')
@endsection
@section('content')
    <form action=""></form>
    <div class="row">
        <div class="col-md-10">
            <br>
            <br>
            <br>
            <br> <p>Бүртгэлтэй хэрэглэгчдийн тоо : {{$user->count()}}</p>
            <br> <p>Нийт хэдэн хүн орж үзсэн : {{$counter->views}}</p>
            <br> <p>Гэрээгээ хүлээж байгаа хүмүүсийн тоо : </p>
            <br> <p>Нийт зарагдсан байр :  </p>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
@section('footer')
@endsection