@extends('layouts.main')
@section('header')
@endsection
@section('content')
    <form action=""></form>
        <div class="content">

             <p>Бүртгэлтэй хэрэглэгчдийн тоо : {{$user->count()}}</p>
             <p>Нийт хэдэн хүн орж үзсэн : {{$counter->views}}</p>
             <p>Гэрээгээ хүлээж байгаа хүмүүсийн тоо : </p>
             <p>Нийт зарагдсан байр :  </p>
        </div>


@endsection
@section('footer')
@endsection