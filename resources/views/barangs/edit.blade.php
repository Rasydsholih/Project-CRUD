@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>
    <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $barang->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $barang->harga }}" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ $barang->stok }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
