@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="row mx-0">
            <div class="col-md-8">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card shadow-sm rounded">
                            <img src="/assets/images/{{ $product->gambar }}" alt="{{ $product->nama }}" class="rounded">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->nama }}</h5>
                                <p>{{ $product->harga }}</p>
                                <form action="{{ route('transaksi.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h5 class="mt-1">Keranjang Pesanan</h5></div>
                    <div class="card-body">
                        @if(session('cart'))
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Quantity</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (session('cart') as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>@if(isset($item['product'])){{ $item['product']->nama }}
                                        @else
                                            -
                                        @endif</td>
                                        <td>
                                             <div class="d-flex mt-2">
                                                <form action="{{ isset($item['product']) ? route('transaksi.update', $item['product']->id) : '#' }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] - 1 }}">
                                                    <button class="btn btn-primary btn-sm"><i class="bi bi-dash"></i></button>
                                                </form>
                                                <p class="mt-1 px-2">{{ $item['quantity'] }}</p>
                                                <form action="{{ isset($item['product']) ? route('transaksi.update', $item['product']->id) : '#' }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] + 1 }}">
                                                    <button class="btn btn-primary btn-sm"><i class="bi bi-plus"></i></button>
                                                </form>
                                             </div>
                                        </td>
                                        <td>Rp. {{ $item['product']->harga * $item['quantity'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="font-weight-bold">Total: Rp {{ $total }}</div>
                                <form action="{{ route('transaksi.checkout') }}" method="POST">@csrf
                                    <div class="form-group">
                                        <select name="pelanggan" class="form-control" id="pelanggan_checkout">
                                            <option value="">Pilih Pelanggan</option>
                                            @foreach ($pelanggans as $pelanggan) <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option> @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Pesan</button>
                                </form>
                            </div>
                        @else
                        <p class="text-center">Keranjang Kosong</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
