@extends('layouts.app')

@section('title', 'Form SPPD')

@section('content')

    <div class="title">
        Form Surat Perintah Perjalanan Dinas
    </div>
    <div class="card">
        <form action="{{ route('sppd.edit', $sppd) }}" method="POST">
            @csrf
            @method('put')
            <input name="spt_id" type="hidden" class="form-control" value="{{ $sppd->id }}">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">No. Surat Tugas</label>
                        <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ $sppd->nomor }}" readonly>
                        @error('nomor')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">Pejabat Berwewenang yang Memberi Perintah</label>
                        <input type="text" class="form-control" value="{{ $sppd->spt->pejabat->name }}" readonly>
                        @error('pejabat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">Tempat Keberangkatan</label>
                        <input type="text" class="form-control @error('tempat_berangkat') is-invalid @enderror" name="tempat_berangkat" value="{{ old('tempat_berangkat', $sppd->tempat_berangkat) }}">
                        @error('tempat_berangkat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">Instansi</label>
                        <input type="text" class="form-control @error('instansi') is-invalid @enderror" name="instansi" value="{{ old('instansi', $sppd->instansi) }}">
                        @error('instansi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">Mata Anggaran</label>
                        <input type="text" class="form-control @error('mata_anggaran') is-invalid @enderror" name="mata_anggaran" value="{{ old('mata_anggaran', $sppd->mata_anggaran) }}">
                        @error('mata_anggaran')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label mb-2">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan', $sppd->keterangan) }}">
                        @error('keterangan')
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
