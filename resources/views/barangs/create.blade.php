@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Barang</h1>
    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
