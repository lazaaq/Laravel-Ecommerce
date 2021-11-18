@extends('layouts.dashboard')

@section('title')
BADASS | Single Products
@endsection

@section('css')

@endsection

@section('contents')
<div class="container">
    <h1 class="m-5 text-center">Ini Single Product</h1>
    <hr class="py-1 rounded">
    <h3>Nama Produk : {{ $product->nama_produk }}</h3>
    <p>Deskripsi : {{$product->deskripsi}}</p>
    <p>Harga : {{$product->harga}}</p>
    <div class="wrap-button d-flex">
        <a href="/my" class="btn btn-outline-dark me-3">Back to My Product</a>
        <a href="/edit/{{ $product->id }}" class="btn btn-outline-dark me-3">Edit</a>
        <a href="/delete/{{ $product->id }}" class="btn btn-outline-dark me-3">Delete</a>
    </div>
</div>
@endsection