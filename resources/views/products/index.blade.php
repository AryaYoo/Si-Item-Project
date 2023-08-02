@extends('layouts.layout-1')

@section('title')
List Produk
@endsection

@section('content')
<div class="row mb-3 mt-4 text-center">
    <div class="col-md themed-grid-col">
        <div class="row pt-1 pb-1" style="background-color: #213655;">
            <div class="col-md-1 thermed-grid-col"></div>
            <div class="col-md-2 thermed-grid-col text-light border-end">PHOTO</div>
            <div class="col-md-2 thermed-grid-col text-light border-end">JUDUL</div>
            <div class="col-md-2 thermed-grid-col text-light border-end">KETERANGAN</div>
            <div class="col-md-2 thermed-grid-col text-light border-end">HARGA</div>
            <div class="col-md-2 thermed-grid-col text-light">ACTION</div>
            <div class="col-md-1 thermed-grid-col"></div>
        </div>
    </div>
</div>
<div class="position-fixed bottom-0 end-0 p-3">
    <a href="{{ url('/upload') }}" class="btn btn-warning">
        ADD
    </a>
</div>
@endsection
