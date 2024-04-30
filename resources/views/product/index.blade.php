@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <a href="{{ route('product.create') }}" class="btn btn-primary">Buat Minuman Baru</a>
                <div class="card">
                    <div class="card-header">Daftar Minuman</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $product->nama }}</td>
                                            <td><img src="/assets/images/{{ $product->gambar }}" alt="" style="width: 80px;height: 80px;object-fit: cover;"></td>
                                            <td>{{ $product->harga }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-primary me-2"><i class="bi bi-pencil"></i></a>
                                                    <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
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