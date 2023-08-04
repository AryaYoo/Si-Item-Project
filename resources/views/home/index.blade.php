@extends('layouts.main')

@section('title', 'Si I-Tem | Dasboard')

{{-- ini navigation 2 --}}
@section('navigation2')
    <ul class="nav justify-content-center" style="background: #F5EFE7">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">KATEGORI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">SOROTAN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">ARTIKEL</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">BANTUAN</a>
        </li>
    </ul>
@endsection

{{-- ini content per halaman --}}
@section('content')

    <div class="text-center my-5" style="background-color: #213655;">
        <br>
        <h1 style="color: #FFFFFF; font-weight: 300;">KATEGORI</h1>

        <div class="container mt-5">
            <div class="row">
                <div class="card text-center mb-3 card-bg" style="width: 18rem;">
                    <a href="{{ url('products/handphone') }}" class="btn-category">
                        <div class="card-body ">
                            <h5 class="card-title">HANDPHONE</h5>
                        </div>
                    </a>
                </div>

                <div class="card text-center mb-3 card-bg-1" style="width: 18rem;">
                    <a href="{{ url('products/laptop') }}" class="btn-category">
                        <div class="card-body ">
                            <h5 class="card-title">LAPTOP</h5>
                        </div>
                    </a>
                </div>

                <div class="card text-center mb-3 card-bg-2" style="width: 18rem;">
                    <a href="{{ url('products/elektronik-lain') }}" class="btn-category">
                        <div class="card-body ">
                            <h5 class="card-title">ELEKTRONIK LAIN</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br>
    </div>

    <br>
@endsection
