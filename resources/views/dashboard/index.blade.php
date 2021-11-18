@extends('layouts.dashboard')

@section('title')
BADASS | DASHBOARD
@endsection

@section('css')

@endsection

@section('contents')
    <h1>Hello, {{ Auth::user()->name }}</h1>
@endsection