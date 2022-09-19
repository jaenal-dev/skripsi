@extends('layouts.app')

@section('title', 'Form Anggaran')

@section('content')

    <div class="title">
        Form Anggaran
    </div>
    <div class="card">
        <form action="{{ route('anggaran.update', $anggaran) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-label mb-2">Nominal</label>
                        <input type="number" class="form-control mb-2 @error('nominal') is-invalid @enderror" name="nominal" value="{{ old('nominal', $anggaran->nominal) }}">
                        @error('nominal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
