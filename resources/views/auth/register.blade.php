
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">


    {{--    <link rel="shortcut icon" href="{{asset('')}}assets/images/favicon.ico">--}}

    <title>Pyramid Apartment</title>
    <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
    <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
</head>
<body>
<br>
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-box">
                <ul class="nav nav-tabs tabs-bordered nav-justified">
                    <li class="nav-item">
                        <a href="{{url('login')}}" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Нэвтрэх
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('register')}}" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            Бүртгүүлэх
                        </a>
                    </li>

                </ul>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <br>
                        <h2 style="margin-bottom: 20px"><b>Pyramid Apartment</b></h2>
                        {{--<p style="margin-bottom: 30px">Энэхүү мэдээлэл дээр үндэслэн бид танд урамшуулал болон эрүүл мэндийн үзүүлэлт харуулах болно.</p>--}}

                        <br>
                    </div>
                    <div class="col-md-1"></div>
                </div>


                <div class="">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required placeholder="Овог*">

                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('last_name') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="Нэр*">

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('name') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input type="text" class="form-control{{ $errors->has('register_number') ? ' is-invalid' : '' }}" name="register_number" value="{{ old('register_number') }}" required placeholder="Регистрийн дугаар*">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Цахим хаяг*">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <select class="form-control" name="code">
                                    <option value="+976">+976</option>
                                    <option value="+1">+1</option>
                                    <option value="+81">+81</option>
                                    <option value="+82">+82</option>
                                </select>
                            </div>
                            <div class="col-md-7">
                                <input id="" type="number" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required placeholder="Утасны дугаар*">

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="*******">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="*******">
                                    </div>
                                </div>
                                <span class="invalid-feedback" role="alert">
                                        <strong>fdsafda</strong>
                                    </span>

                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn btn-md btn-primary btn-block">
                                    Бүртгүүлэх
                                </button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



