@extends('layouts.layout-2')

@section('title')
Upload
@endsection

@section('content')
<div class="container mt-5">
    <h2>Create Product</h2>
    <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="product_name" class="form-label">Judul</label>
            <input type="text" class="form-control" id="product_name" name="product_name">
            @if ($errors->has('product_name'))
                <span class="text-danger">{{ $errors->first('product_name') }} </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" id="category" name="category">
                <option value="handphone">Handphone</option>
                <option value="laptop">Laptop</option>
                <option value="elektronik_lain">Elektronik Lain</option>
            </select>
            @if ($errors->has('category'))
                <span class="text-danger">{{ $errors->first('category') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }} </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01">
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }} </span>
            @endif
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image" accept=".png, .jpg, .jpeg"
                onchange="previewImage()">
            @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }} </span>
            @endif
        </div>
        <div class="mb-3 d-flex justify-content-center align-items-center">
            <img id="preview-image-before-upload" src=" {{ asset('images/image-not-found.jpeg') }} "
                alt="preview image" style="max-height: 250px;">
        </div>
        <button type="upload" class="btn btn-primary mb-3">Upload</button>
    </form>
</div>
@endsection
