@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <i class="bi bi-receipt me-2"></i>Nota Pesanan
                </div>

                <div class="card-body">
                    <h2>Detail Pesanan:</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $item)
                            <tr>
                                <td>{{ $item['product']->nama }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>Rp {{ $item['product']->harga }}</td>
                                <td>Rp {{ number_format($item['product']->harga * $item['quantity'], 0, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3">Total Harga:</th>
                                <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                        <p>Terima kasih atas pesanan Anda!</p>
                        <button onclick="printNota()" class="btn btn-primary">Cetak</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function printNota() {
        window.print();
    }
</script>
@endsection
