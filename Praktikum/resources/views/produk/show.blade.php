@extends('layouts.app')

@section('title', 'Produk - ')

@section('content')
    <x-alert type="{{ $alertType }}">
        {{ $message }}
    </x-alert>
@endsection
