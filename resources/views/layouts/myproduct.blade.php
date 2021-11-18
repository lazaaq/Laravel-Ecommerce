@extends('layouts.dashboard')

@section('title')
BADASS | Add Products
@endsection

@section('css')
<style>

</style>
@endsection

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h1 class="text-center">@yield('heading')</h1>
        </div>
    </div>
    <form action="@yield('form-action')" method="POST">
        @csrf
        <div class="nama-produk row mb-3">
            <div class="col-3 fs-5">
                Nama Produk*
            </div>
            <div class="col-9">
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="@yield('old-nama-produk')" required autofocus>
            </div>
            @error('nama_produk')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="slug row mb-3">
            <div class="col-3 fs-5">
                Slug*
            </div>
            <div class="col-9">
                <input type="text" class="form-control" id="slug" name="slug" value="@yield('old-slug')" required>
            </div>
            @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="harga row mb-3">
            <div class="col-3 fs-5">
                Harga*
            </div>
            <div class="col-9">
                <input type="text" class="form-control" id="harga" name="harga" value="@yield('old-harga')" required>
            </div>
            @error('harga')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="deskripsi row mb-3">
            <div class="col-3 fs-5">
                Deskripsi
            </div>
            <div class="col-9">
                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" style="height: 100px">@yield('old-deskripsi')</textarea>
            </div>
            @error('deskripsi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="keterangan mb-3">
            *Required
        </div>
        <div class="button">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection