@extends('layouts.layout-3')

@section('title')
dashboard admin
@endsection

@section('content')
    <br>
    <h1 class="text-center" style="color: #000000; font-weight: 300;">Welcome Admin!</h1>
    <div class="text-center my-5" style="background-color: #213655;">
        <div class="container mt-5">
            <br>
            <div class="row">
                <div class="card text-center mb-3" style="width: 18rem; background-color:#000000;">
                    <a href="{{ url('/order') }}" class="btn-category">
                        <div class="card-body">
                            <h5 class="card-title">LIST ORDER</h5>
                        </div>
                    </a>
                </div>

                <div class="card text-center mb-3" style="width: 18rem; background-color:#000000;">
                    <a href="{{ url('#') }}" class="btn-category">
                        <div class="card-body" >
                            <h5 class="card-title">EDIT ARTIKEL</h5>
                        </div>
                    </a>
                </div>

                <div class="card text-center mb-3" style="width: 18rem; background-color:#000000;">
                    <a href="{{ url('#') }}" class="btn-category">
                        <div class="card-body">
                            <h5 class="card-title">EDIT FAQ</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
