@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Barang Diskon</h1>
    
    <div class="row">
        <!-- Barang Diskon 1 -->
        <div class="col-md-6 mb-3">
            <div class="card" style="background-color: #e0e0e0; padding: 10px; display: flex; align-items: center;">
                <img src="{{ asset('images/minyak-goreng.png') }}" alt="Minyak Goreng" style="width: 60px; height: 60px; margin-right: 15px;"> <!-- Ubah src dengan link gambar yang benar -->
                <div style="flex-grow: 1;">
                    <h5 class="card-title"><b>minyak goreng 1 liter</b></h5>
                    <p class="card-text">Diskon hanya Rp20.000</p>
                </div>
                <button class="btn btn-info" style="background-color: #4de4ea; border-color: #4de4ea;">BELI</button>
            </div>
        </div>

        <!-- Barang Diskon 2 (jika ada) -->
        <div class="col-md-6 mb-3">
            <div class="card" style="background-color: #e0e0e0; padding: 10px; display: flex; align-items: center;">
                <img src="{{ asset('images/minyak-goreng.png') }}" alt="Minyak Goreng" style="width: 60px; height: 60px; margin-right: 15px;"> <!-- Ubah src dengan link gambar yang benar -->
                <div style="flex-grow: 1;">
                    <h5 class="card-title"><b>minyak goreng 1 liter</b></h5>
                    <p class="card-text">Diskon hanya Rp20.000</p>
                </div>
                <button class="btn btn-info" style="background-color: #4de4ea; border-color: #4de4ea;">BELI</button>
            </div>
        </div>
    </div>
</div>
@endsection
