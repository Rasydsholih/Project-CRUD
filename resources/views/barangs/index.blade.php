@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Barang</h1>
    <a href="{{ route('barangs.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>
                        <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
