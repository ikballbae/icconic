@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">Buat Pelanggan Baru</a>
                <div class="card">
                    <div class="card-header">Daftar Pelanggan</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pelanggans as $pelanggan)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $pelanggan->nama }}</td>
                                            <td>{{ $pelanggan->email }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-sm btn-primary me-2"><i class="bi bi-pencil"></i></a>
                                                    <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="post">
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