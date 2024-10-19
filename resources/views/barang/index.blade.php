@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Barang Diskon</h1>
    
    <!-- Tambahkan tombol untuk menambah barang baru -->
    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('deleted'))
    <div class="alert alert-danger">
        {{ session('deleted') }}
    </div>
    @endif



    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th> <!-- Kolom baru untuk tombol edit -->
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>
                        <!-- Tambahkan tombol Edit -->
                        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- tombol hapus -->
                        <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
