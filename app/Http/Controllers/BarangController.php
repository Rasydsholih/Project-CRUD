<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    // Method untuk menampilkan semua barang
    public function index()
    {
        $barangs = Barang::all(); // Mengambil semua data barang dari database
        return view('barang.index', compact('barangs'));
    }

    // Method untuk menampilkan form create barang
    public function create()
    {
        return view('barang.create');
    }

    // Method untuk menyimpan barang baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        Barang::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    // Method untuk menampilkan form edit barang
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    // Method untuk mengupdate data barang
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Cari barang berdasarkan id
        $barang = Barang::findOrFail($id);

        // Hapus barang dari database
        $barang->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('barang.index')->with('deleted', 'Barang berhasil dihapus');
    }

}
