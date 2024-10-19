@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>
    
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Method PUT untuk update -->
        
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $barang->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Barang</button>
    </form>
</div>
@endsection
