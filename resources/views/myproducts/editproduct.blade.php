@extends('layouts/myproduct')

@section('heading')
Edit Produk
@endsection

@section('form-action')
/edit/{{ $product->id }}
@endsection

@section('old-nama-produk')
{{ $product->nama_produk }}
@endsection

@section('old-slug')
{{ $product->slug }}
@endsection

@section('old-harga')
{{ $product->harga }}
@endsection

@section('old-deskripsi')
{{ $product->deskripsi }}
@endsection

