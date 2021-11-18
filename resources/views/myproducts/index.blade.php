@extends('layouts.dashboard')

@section('title')
BADASS | My Products
@endsection

@section('css')
<link rel="stylesheet" href="css/myproduct-index.css">
@endsection

@section('contents')

@if(session()->has('successAddProduct'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('successAddProduct') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h1 class="my-5 text-center">My Products</h1>
@foreach($products as $product)
<div class="wrap-box">
    <h3>Nama Produk : {{ $product->nama_produk }}</h3>
    <p>Deskripsi : {{$product->deskripsi}}</p>
    <p>Harga : {{$product->harga}}</p>
    <div class="wrap-button d-flex">
        <a href="/my/{{ $product->slug }}" class="btn btn-primary me-3">Read</a>
        <a href="/edit/{{ $product->id }}" class="btn btn-outline-dark me-3">Edit</a>
        <a href="/delete/{{ $product->id }}" class="btn btn-outline-dark me-3">Delete</a>
    </div>

</div>
@endforeach
@endsection