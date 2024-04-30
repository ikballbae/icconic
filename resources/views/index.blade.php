@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="p-3 bg-white d-flex justify-content-around align-items-center rounded shadow-sm">
                    <div class="">
                        <h3 class="fs-2">{{ $product }}</h3>
                        <p class="fs-5">Product</p>
                    </div>
                    <i class="bi bi-cart fs-1 primary-text"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-white d-flex justify-content-around align-items-center rounded shadow-sm">
                    <div class="">
                        <h3 class="fs-2">{{ $transaksi }}</h3>
                        <p class="fs-5">Transaksi</p>
                    </div>
                    <i class="bi bi-cash fs-1 primary-text"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-white d-flex justify-content-around align-items-center rounded shadow-sm">
                    <div class="">
                        <h3 class="fs-2">{{ $pelanggan }}</h3>
                        <p class="fs-5">Pelanggan</p>
                    </div>
                    <i class="bi bi-people fs-1 primary-text"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-white d-flex justify-content-around align-items-center rounded shadow-sm">
                    <div class="">
                        <h3 class="fs-2">{{ $user }}</h3>
                        <p class="fs-5">User</p>
                    </div>
                    <i class="bi bi-lock fs-1 primary-text"></i>
                </div>
            </div>
        </div>
    </div>
@endsection