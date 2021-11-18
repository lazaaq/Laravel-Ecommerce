@extends('layouts/myproduct')

@section('heading')
Tambahkan Produk
@endsection

@section('form-action')
/my
@endsection

@section('old-nama-produk')
{{ old('nama-produk') }}
@endsection

@section('old-slug')
{{ old('slug') }}
@endsection

@section('old-harga')
{{ old('harga') }}
@endsection

@section('old-deskripsi')
{{ old('deskripsi') }}
@endsection

