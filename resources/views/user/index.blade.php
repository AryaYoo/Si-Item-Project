@extends('layouts.layout-2')

@section('title')
User Profile
@endsection

@section('content')

<div class="container mt-4">
    {{-- <div class="main-body"> --}}
    <div class="row gutters-sm">
        <div class="col-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="#" alt="#FotoUser"
                            class="circle" style="width: 150px; height: 150px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <p class="text-muted mb-0">#Nama</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <p class="text-muted mb-0">#Email</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Kota / Kabupaten</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <p class="text-muted mb-0">#No Telp </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Alamat Lengkap</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <p class="text-muted mb-0">#Alamat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
