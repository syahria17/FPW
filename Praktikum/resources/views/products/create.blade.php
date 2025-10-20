@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Produk Baru</h2>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nama Produk:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="price">Harga:</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description" rows="3" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
