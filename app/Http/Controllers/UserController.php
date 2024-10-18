<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua data pengguna
        return view('kelola.index', compact('users'));
    }

    public function store(Request $request)
    {
        Log::info('Data yang akan disimpan:', $request->all());

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('users.index')->with('success', 'Akun berhasil ditambahkan');
    }
}

