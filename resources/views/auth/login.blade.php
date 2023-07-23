<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @vite('resources/sass/app.scss')
</head>

<body>

    <body style="background-color:#ce9c5c">
        <div class="container-sm my-3 rounded">
            <div class="row justify-content-center">
                <div class="card row col-lg-5" style="background-color: #213555; border-radius:10%;">
                    <div class="container">
                        <div class="p-5 my-1 rounded-3">
                            <div class="mb-10 text-center mb-5">
                                <i class=""><img class=""
                                        src="{{ Vite::asset('resources/images/Logo-SiBarang.png') }}" width="20%">
                                    <div class="form my-5">
                                </i>
                                <div class="row mb-15">
                                    <h4 class="fs-3 fw-bold text-white">LOGIN TO SI BARANG</h4>
                                </div>
                                <div class="form my-5">
                                    <hr>
                                    {{-- <div class="card-body fs-5 fw-bold text-white"> --}}
                                    <form method="POST" action="{{ route('register') }}">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="row mb-2 w-100px">
                                                <label class="fs-3 text-start text-white">Email</label>
                                                <input id="email" type="email"
                                                    class="form-control py-3 fs-4 @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" placeholder="Masukkan Email Anda" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="row ">
                                                <label class="fs-3 text-start text-white">Password</label>
                                                <input id="password" type="password"
                                                    class="form-control py-3 fs-4 @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password"
                                                    placeholder="Masukkan Password Kamu">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <hr>
                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <a href="{{ route('register') }}" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </a>
                                                    </button>

                                                    <div class="row text-white">
                                                        <div class="col-lg-12 pt-4">
                                                            <button type="submit" class="btn btn-lg btn-warning mt-0">
                                                                <i class="bi bi-box-arrow-center ">
                                                                </i> {{ __('Login') }}
                                                            </button>
                                                        </div>
                                                        {{-- </div>
                                            <div class="col-lg-12 mt-4">

                                                <label class="checkbox pull-left">
                                                    <input type="checkbox" value="remember-me">
                                                    Remember me
                                                </label>
                                                <a href="#" class="pull-right need-help">Need help? </a><span
                                                    class="clearfix"></span>
                                            </div>
                                    </form>
                                </div>
                                <a href="#" class="text-center new-account">Create an account </a>
                            </div> --}}
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @vite('resources/js/app.js')
    </body>

</html>
