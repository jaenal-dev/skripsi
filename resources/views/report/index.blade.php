@extends('layouts.app')

@section('title', 'Halaman Laporan Kegiatan')

@section('css')
    <link href="{{ asset('') }}vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" />
@endsection

@section('content')

    <div class="title">
        Laporan Kegiatan
    </div>

    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-12">
                <div class="card">
                    @if ($reports->count())
                        <div class="card-header text-end">

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table display text-center table-sm">
                                    <thead>
                                        <tr>
                                            <th><small>Nomor Surat</small></th>
                                            <th><small>Tujuan</small></th>
                                            <th><small>Laporan</small></th>
                                            <th><small>Tgl Pergi <br> s/d <br> Tgl Kembali</small></th>
                                            <th><small>Aksi</small></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reports as $report)
                                            <tr>
                                                <td class="form-text">{{ $report->nomor }}</small></td>
                                                <td class="form-text">{{ $report->spt->tujuan }}</small></td>
                                                <td class="form-text">{!! Str::limit($report->laporan, 150, '...') !!}</small></td>
                                                <td class="form-text">
                                                    {{ date('d/F/Y', strtotime($report->spt->tgl_pergi ?? '')) }}<br>s/d<br>{{ date('d/F/Y', strtotime($report->spt->tgl_pulang ?? '')) }}
                                                </td>
                                                <td>
                                                    <div class="py-2 mb-0" role="button">
                                                        @if (Auth::user()->can(['edit report', 'delete report']))
                                                            <button class="btn btn-danger" id="swall-delete" data-id="{{ $report->id }}" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                                                        @else
                                                            <a href="{{ route('report.print') }}" class="btn btn-primary" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a>
                                                            <a href="{{ route('report.edit', $report) }}" class="btn btn-warning" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                            <button class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <p class="p-1"><h5 class="text-center">Belum Ada Laporan Kegiatan</h5></p>
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

    <script>
        DataTable.init()
    </script>
    <script>
        $('#example2').on('click', '#swall-delete', function () {
            let data = $(this).data()
            let report = data.id

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
                        url: `{{ url('report') }}/${report}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(res){
                            $(document).ajaxStop(function(){
                                setTimeout("window.location = 'report'",1000);
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
