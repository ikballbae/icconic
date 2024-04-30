@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <a href="{{ route('kasir.create') }}" class="btn btn-primary">Buat Kasir Baru</a>
                <div class="card">
                    <div class="card-header">Daftar Kasir</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kasirs as $kasir)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $kasir->username }}</td>
                                            <td>{{ $kasir->email }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('kasir.edit', $kasir->id) }}" class="btn btn-sm btn-primary me-2"><i class="bi bi-pencil"></i></a>
                                                    <form action="{{ route('kasir.destroy', $kasir->id) }}" method="post">
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