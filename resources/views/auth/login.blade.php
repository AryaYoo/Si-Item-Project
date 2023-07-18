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

    <body style="background-color:antiquewhite">

        <div class="container-sm my-3 py-5" style="background-color:#213655">
            <div class="row justify-content-center">
                <div class="p-5 my- rounded-3 col-xl-5 border">
                    <div class="mb-10 text-center mb-5">
                        <i class=""><img src="Logo-SiBarang.png" style=""><div class="form my-5"></i>
                    <div class="row mb-15" >
                        <h4 class="fs-5 fw-bold" style="font-color:#ffff">LOGIN TO SI BARANG </h4>
                    </div>
                    <div class="form my-5">
                        <hr>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-5 w-100px" style="color:hsl(0, 100%, 99%)">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Masukkan Email Anda" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Masukkan Password Kamu">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <hr>
                            <div class="row pt-4">
                                <button type="submit" class="btn btn-warning btn-lg mt-0">

                                    <i class="bi bi-box-arrow-center"></i> {{ __('Login') }}
                                </button>
                                  <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="#" class="text-center new-account">Create an account </a>
                            </div>
                        </form>
                    </div>
                </div>
                @vite('resources/js/app.js')
    </body>


</html>

