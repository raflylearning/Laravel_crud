@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('barang') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('barang.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang"
                                value="{{ $barang ->nama_barang }}" placeholder="Nama barang" disabled>
                            @error('nama_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga barang</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                value="{{ $barang ->harga }}" placeholder="harga barang" disabled>
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Stok barang</label>
                            <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok"
                                value="{{ $barang ->stok }}" placeholder="Stok barang" disabled>
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Id Merek</label>
                            <input type="text" class="form-control @error('id_merek') is-invalid @enderror" name="id_merek"
                                value="{{ $barang ->id_merek }}" placeholder="Id Merek" disabled>
                            @error('id_merek')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection