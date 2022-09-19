@extends('layouts.app')

@section('title', 'Tambah Pegawai')

@section('content')

    <div class="text">
        <h1>Form Pegawai</h1>
    </div>

    <div class="row same-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Hi, <b>{{ Auth::user()->name }}</b></h5>
                    <small>
                        <p class="mb-0">Change information about yourself on this page.</p>
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class="row same-height">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex">
                        <div class="card-body">
                            <div class="row same-height">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" name="name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="nip">NIP</label>
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror"
                                            value="{{ old('nip') }}" name="nip">
                                        @error('nip')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" name="email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label class="form-label">Jenis Kelamin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="laki_laki" value="L"
                                                {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="perempuan" value="P"
                                                {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                        @error('jenis_kelamin')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="pangkat">Pangkat/Jabatan</label>
                                        <input type="text" class="form-control @error('pangkat') is-invalid @enderror"
                                            value="{{ old('pangkat') }}" name="pangkat">
                                        @error('pangkat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="esselon">Esselon</label>
                                        <input type="text" class="form-control @error('esselon') is-invalid @enderror"
                                            value="{{ old('esselon') }}" name="esselon">
                                        @error('esselon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="golongan">Golongan</label>
                                        <input type="text" class="form-control @error('golongan') is-invalid @enderror"
                                            value="{{ old('golongan') }}" name="golongan">
                                        @error('golongan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="text" class="form-control @error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" name="password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 align-items-center">
                                    <h1>Foto</h1>
                                    <div class="wrapper">
                                        @if (auth()->user()->image)
                                            <img src="{{ asset('storage/' . auth()->user()->image) }}" class="profile">
                                            <input type="file" name="image" class="image">
                                        @else
                                            <img src="{{ asset('assets/images/avatar1.png') }}" class="profile">
                                            <input type="file" name="image" class="image">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="footer text-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
@endsection
