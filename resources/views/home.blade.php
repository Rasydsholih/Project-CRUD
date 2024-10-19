@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Selamat Datang di WPAD (warung pasti ada diskon)</h1>
    <p>Pilih barang untuk memenuhi kebutuhan anda.</p>
    <a href="{{ route('barangs.index') }}" class="btn btn-primary">Lihat Data Barang</a>
</div>
@endsection
