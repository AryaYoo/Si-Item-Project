@extends('layouts.layout-3')

@section('title')
List Order
@endsection

@section('content')
<div class="row mb-3 mt-4 text-center">
    <div class="col-md themed-grid-col">
        <div class="row pt-1 pb-1" style="background-color: #213655;">
            <div class="col-md-1 thermed-grid-col"></div>
            <div class="col-md-2 thermed-grid-col text-light border-end">Nama</div>
            <div class="col-md-2 thermed-grid-col text-light border-end">Kode Transaksi</div>
            <div class="col-md-2 thermed-grid-col text-light border-end">Barang</div>
            <div class="col-md-2 thermed-grid-col text-light border-end">Transfer</div>
            <div class="col-md-2 thermed-grid-col text-light">Konfirmasi</div>
            <div class="col-md-1 thermed-grid-col"></div>
        </div>
    </div>
</div>
@endsection
