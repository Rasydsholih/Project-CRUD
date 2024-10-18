<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;


class KelolaAkunController extends Controller
{
    // Tampilkan semua akun
    public function index()
    {
        $users = User::all();
        return view('kelola.index', compact('users'));
    }

    // Tampilkan form tambah akun
    public function create()
    {
        return view('kelola.create');
    }

    // Simpan data akun yang baru
public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'role' => 'required|in:admin,user',
    ]);

    // Simpan data ke dalam database
    $user = new User();
    $user->nama = $request->input('nama');  // Tambahkan kolom nama
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->role = $request->input('role');
    $user->save();

    // Redirect atau beri respon setelah data tersimpan
    return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
}

    
    
    // Tampilkan form edit akun
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('kelola.edit', compact('users'));
    }

    // Update data akun
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
            'role' => $request->role,
        ]);

        return redirect()->route('kelola.index')->with('success', 'Akun berhasil diperbarui!');
    }

    // Hapus akun
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('kelola.index')->with('success', 'Akun berhasil dihapus!');
    }
}
