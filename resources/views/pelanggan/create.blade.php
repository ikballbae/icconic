@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-2">Buat Akun Pelanggan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pelanggan.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label"><h5>Nama</h5></label>
                                <div class="col-md-7">
                                    <input type="text" id="nama" name="nama" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label"><h5>Email</h5></label>
                                <div class="col-md-7">
                                    <input type="email" id="email" name="email" class="form-control">
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