@extends('layouts.app')

@section('title', 'Data SPPD')

@section('css')
    <link href="{{ asset('') }}vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" />
@endsection

@section('content')

    <div class="title">
        Surat Perintah Perjalanan Dinas
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-end">
                    </div>
                    <div class="card-body">
                        @if ($sppds->count())
                            <div class="table-responsive">
                                <table id="example2" class="table display text-center table-md">
                                    <thead>
                                        <tr>
                                            <th><small>No. Surat</small></th>
                                            <th><small>Dibuat</small></th>
                                            <th><small>Maksud <br> Perjalanan Dinas</small></th>
                                            <th><small>Tgl Pergi <br> s/d <br> Tgl Kembali</small></th>
                                            <th><small>Aksi</small></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sppds as $sppd)
                                            <tr data-entry-id="{{ $sppd->id }}">
                                                <td class="form-text">
                                                    {{ $sppd->nomor }}
                                                </td>
                                                <td class="form-text">
                                                    {{ date('d F Y', strtotime($sppd->created_at)) }}
                                                </td>
                                                <td class="form-text">{{ $sppd->spt->tujuan }}</td>
                                                <td class="form-text">
                                                    {{ date('d F Y', strtotime($sppd->spt->tgl_pergi)) }}<br>s/d<br>{{ date('d F Y', strtotime($sppd->spt->tgl_pulang)) }}
                                                </td>

                                                <td class="p-3">
                                                    <div class="btn-group" role="button">
                                                        @if (auth()->user()->can(['edit sppd', 'delete sppd']))
                                                            <a href="{{ route('sppd.edit', $sppd) }}" class="btn btn-warning mx-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                            <button class="btn btn-danger" id="swall-delete" data-id="{{ $sppd->id }}" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                                                        @else
                                                            <a href="#" class="btn btn-primary mx-1" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a>
                                                            <a href="{{ route('report.create', $sppd) }}" class="btn btn-success" data-toggle="tooltip" title="Buat Laporan"><i class="fas fa-pencil-alt"></i></a>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <h5 class="text-center">Oops.. Belum Ada Tugas Untukmu</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('') }}vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('') }}assets/js/page/datatables.js"></script>

    @stack('js')
    <script>
        DataTable.init()
    </script>
    <script>
        $('#example2').on('click', '#swall-delete', function () {
            let data = $(this).data()
            let sppd = data.id

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'DELETE',
                        url: `{{ url('sppd') }}/${sppd}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(res){
                            $(document).ajaxStop(function(){
                                setTimeout("window.location = 'sppd'",1000);
                            });
                            Swal.fire(
                                'Deleted!',
                                res.message,
                                res.status
                            )
                        }
                    })
                }
            })
        })
    </script>
@endsection
