@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Daftar Laporan Transaksi</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Product</th>
                                        <th scope="col">Pelanggan</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan as $lapor)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $lapor->product->nama }}</td>
                                            <td>{{ $lapor->pelanggan->nama }}</td>
                                            <td>{{ $lapor->quantity }}</td>
                                            <td>{{ $lapor->total_harga }}</td>
                                            <td>{{ $lapor->tanggal }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
