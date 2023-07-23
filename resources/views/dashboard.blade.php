@extends('layouts.layout-1')

@section('title')
Dashboard
@endsection

@section('content')

    {{-- Kategori --}}
    <div class="text-center my-5" style="background-color: #213655;">
        <br>
        <h1 style="color: #FFFFFF; font-weight: 300;">KATEGORI</h1>

        <div class="container mt-5">
            <div class="row">
                <div class="card text-center mb-3 card-bg" style="width: 18rem;">
                    <a href="{{ url('/product') }}" class="btn-category">
                        <div class="card-body ">
                            <h5 class="card-title">HANDPHONE</h5>
                        </div>
                    </a>
                </div>

                <div class="card text-center mb-3 card-bg-1" style="width: 18rem;">
                    <a href="{{ url('/product') }}" class="btn-category">
                        <div class="card-body ">
                            <h5 class="card-title">LAPTOP</h5>
                        </div>
                    </a>
                </div>

                <div class="card text-center mb-3 card-bg-2" style="width: 18rem;">
                    <a href="{{ url('/product') }}" class="btn-category">
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
