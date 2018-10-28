
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    {{--<meta name="description" content="">--}}
    {{--<meta name="author" content="Coderthemes">--}}


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

<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-box">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <br>
                        <h2 style="margin-bottom: 20px"><b>Pyramid Apartments</b></h2>
                        <p style="margin-bottom: 30px">Бид таны дугаар руу мессежээр баталгуужуулах код илгээнэ</p>

                    </div>
                    <div class="col-md-1"></div>
                </div>


                <div class="">
                    <form method="POST" action="{{ route('verify') }}" >
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input type="text" class="form-control{{ session('error') ? ' is-invalid' : '' }}" name="verification_code" required placeholder="Баталгаажуулах код*">
                            </div>
                            <div class="col-md-1"></div>
                        </div>


                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn btn-md btn-primary btn-block">
                                    Баталгаажуулах
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



