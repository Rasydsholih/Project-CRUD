@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Barang Diskon</h1>
    
    <div class="row">
        <!-- Barang Diskon 1 -->
        <div class="col-md-6 mb-3">
            <div class="card d-flex align-items-center" style="background-color: #e0e0e0; padding: 10px;">
                <div class="d-flex" style="width: 100%; align-items: center;">
                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/108/MTA-157746806/abc_abc-kecap-manis-135ml_full01.jpg" alt="Minyak Goreng" style="width: 60px; height: 60px; margin-right: 15px;"> <!-- Gambar barang -->
                    <div class="flex-grow-1">
                        <h5 class="card-title"><b>ABC kecap manis 135ML</b></h5>
                        <p class="card-text">Diskon hanya Rp10.000</p>
                    </div>
                    <button class="btn btn-info" style="background-color: #4de4ea; border-color: #4de4ea;">BELI</button>
                </div>
            </div>
        </div>

        <!-- Barang Diskon 2 -->
        <div class="col-md-6 mb-3">
            <div class="card d-flex align-items-center" style="background-color: #e0e0e0; padding: 10px;">
                <div class="d-flex" style="width: 100%; align-items: center;">
                    <img src="https://images.tokopedia.net/img/cache/700/OJWluG/2022/10/5/a45c0a96-4570-4c8d-9ab7-ad51db38bd1c.jpg" alt="Minyak Goreng" style="width: 60px; height: 60px; margin-right: 15px;"> <!-- Gambar barang -->
                    <div class="flex-grow-1">
                        <h5 class="card-title"><b>minyak goreng 1 liter</b></h5>
                        <p class="card-text">Diskon hanya Rp20.000</p>
                    </div>
                    <button class="btn btn-info" style="background-color: #4de4ea; border-color: #4de4ea;">BELI</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
