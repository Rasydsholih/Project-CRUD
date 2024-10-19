<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;





Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('barangs', BarangController::class);

// Route Kelola Akun (CRUD)
use App\Http\Controllers\KelolaAkunController;

Route::resource('kelola', KelolaAkunController::class);
Route::get('/kelola-akun', [KelolaAkunController::class, 'index'])->name('kelola.index');
Route::get('/kelola-akun/create', [KelolaAkunController::class, 'create'])->name('kelola.create');
Route::post('/kelola-akun', [KelolaAkunController::class, 'store'])->name('kelola.store');
Route::get('/kelola-akun/{id}/edit', [KelolaAkunController::class, 'edit'])->name('kelola.edit');
Route::patch('/kelola-akun/{id}', [KelolaAkunController::class, 'update'])->name('kelola.update');
Route::delete('/kelola-akun/{id}', [KelolaAkunController::class, 'destroy'])->name('kelola.delete');


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');




// Route untuk menampilkan barang diskon
Route::get('/barangs-diskon', function () {
    return view('barangs.diskon');
})->name('barangs.diskon');



Route::get('barangs', [BarangController::class, 'index'])->name('barangs.index');
Route::get('barangs/create', [BarangController::class, 'create'])->name('barangs.create');
Route::post('barangs', [BarangController::class, 'store'])->name('barangs.store'); // Ensure this line exists




Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');



