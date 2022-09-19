@extends('layouts.app')

@section('title', 'Form Nota Dinas')

@section('content')

    <div class="title">
        Form Nota Dinas
    </div>
    <div class="card">
        <form action="{{ route('nppd.create', $spt) }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <input name="spt_id" type="hidden" class="form-control" value="{{ $spt->id }}">
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">No. Surat Tugas</label>
                        <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ $spt->nomor }}" readonly>
                        @error('spt_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">Kepada</label>
                        <input type="text" class="form-control @error('kepada') is-invalid @enderror" name="kepada" value="{{ old('kepada') }}">
                        @error('kepada')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">Dari</label>
                        <input type="text" class="form-control @error('dari') is-invalid @enderror" name="dari" value="{{ old('dari') }}">
                        @error('dari')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">Anggaran</label>
                        <select class="form-select @error('anggaran_id') is-invalid @enderror" name="anggaran_id" data-placeholder="Anggaran">
                            <option value="">-</option>
                            @foreach ($anggarans as $anggaran)
                                <option value="{{ $anggaran->id }}">{{ $anggaran->nominal }}</option>
                            @endforeach
                        </select>
                        @error('anggaran_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">Prihal</label>
                        <input type="text" class="form-control @error('prihal') is-invalid @enderror" name="prihal" value="{{ old('prihal') }}">
                        @error('prihal')
                            <div class="invalid-feedback">{{ $message }}</div>
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
