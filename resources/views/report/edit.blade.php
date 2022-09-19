@extends('layouts.app')

@section('title', 'Ubah Laporan Kegiatan')

@section('content')

    <div class="title">
        Form Laporan Kegiatan
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ route('report.edit', $report) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input name="spt_id" type="hidden" class="form-control" value="{{ $report->id }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Nomor Surat</label>
                                    <input type="text" class="form-control" name="nomor" value="{{ $report->nomor }}" readonly>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Laporan</label>
                                    <textarea type="text" class="form-control" name="laporan" id="editor" rows="30" aria-valuetext="{{ old('laporan') }}">{{ $report->laporan }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
