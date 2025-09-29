{{-- <!DOCTYPE html>
<html>
<head>
    <title>Product Page</title>
</head>
<body>
    <h1>Hasil Penjumlahan</h1>
    <p>Angka: {{ $angka }}</p>
</body>
</html> --}}

@extends('layouts.app')
@section('Title', 'Halaman Prouduk')
@section('content')

<h1>ini adalah halaman produk </h1>
<h1>selamat datang {{$nama}}</h1>

<div class="alert alert-{{$alertType}}">
    {{$alertMessage}}
</div>

@endsection