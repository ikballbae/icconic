@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-2">Edit Daftar Minuman</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <tr>
                                        @foreach ($errors->all() as $error)
                                            <td>{{ $error }}</td>
                                        @endforeach
                                    </tr>
                                </div>
                            @endif
                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label"><h5>Nama</h5></label>
                                <div class="col-md-7">
                                    <input type="text" id="nama" name="nama" value="{{ $product->nama }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga" class="col-md-4 col-form-label"><h5>Harga</h5></label>
                                <div class="col-md-7">
                                    <input type="text" id="harga" name="harga" value="{{ $product->harga }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gambar" class="col-md-4 col-form-label"><h5>Gambar</h5></label>
                                <div class="col-md-7 mt-1">
                                    <input type="file" id="gambar" name="gambar" class="form-control-file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection