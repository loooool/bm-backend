@extends('layouts.main')
@section('header')
@endsection
@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-box text-center"><h1>Нууц үг оруулах</h1>
                    <br>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <form method="post" action="{{url('/home/user_check'.'/'.$user->id.'/'.'verify')}}">
                               {{csrf_field()}}
                               <input class="form-control" type="password" name="passcode">

                               <br>
                            <button class="btn btn-block btn-primary" type="submit">Зөвшөөрөх</button>
                           </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection