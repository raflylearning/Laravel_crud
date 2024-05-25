@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Merek') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('merek.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('merek.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Merek</label>
                            <input type="text" class="form-control @error('nama_merek') is-invalid @enderror" name="nama_merek"
                                value="{{ $merek ->nama_merek }}" placeholder="Nama Merek" disabled>
                            @error('nama_merek')
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