@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Selamat Datang di Sistem Warung</h1>
    <p>Kelola barang dengan mudah menggunakan sistem CRUD.</p>
    <a href="{{ route('barangs.index') }}" class="btn btn-primary">Lihat Data Barang</a>
</div>
@endsection
