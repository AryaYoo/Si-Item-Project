@extends('layouts.app')

@section('content')

    <body style="background-color:#ce9c5c">
        <div class="container-sm my-5 rounded">
            {{-- <div class="container"> --}}
            {{-- <div style="background-color :#213555 ">
    <div class="row justify-content-center"> --}}
            <div class="col-md-4">
                <div class="card row mb-3" style="background-color :#213555">
                    <i class="text-center"><img class="" src="{{ Vite::asset('resources/images/Logo-SiBarang.png') }}"
                            width="20%">
                        <div class="form my-1">
                    </i>

                    <div class="card-header fs-2 fw-bold text-white mb-10 text-center mb-2">{{ __('Register') }}</div>

                    <div class="card-body fs-5 fw-bold text-white">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">


                                    <div class="row text-white">
                                        <div class="col-lg-12 pt-4">
                                            <a href="{{ route('login') }}" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </a>
                                            <button type="submit" class="btn btn-lg btn-warning mt-0"> <a
                                                    href="{{ route('register') }}"></a>
                                                <i class="bi bi-box-arrow-center">
                                                </i> {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
