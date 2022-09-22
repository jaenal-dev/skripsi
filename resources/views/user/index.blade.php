@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')

    <div class="title">
        Data Pegawai
    </div>
    <div class="card">
        <div class="card-header mb-3">
            <h4 class="mb-2">Data Pegawai</h4>
            @can('create role')
                <a href="{{ route('user.create') }}" class="btn btn-danger btn-icon icon-right">Create <i class="fas fa-chevron-right"></i></a>
            @endcan
        </div>
        <div class="card-body" id="users-list">
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-md-3 text-center mb-4">
                        @if ($user->image)
                            <img alt="image" src="{{ asset('storage/' . $user->image) }}" class="img mb-2" height="80" width="80" style="border-radius: 50%">
                        @else
                            <img alt="image" src="/assets/images/avatar1.png" class="img mb-2" height="80" width="80" style="border-radius: 50%">
                        @endif
                        <div class="user-details">
                            <div class="user-name">{{ $user->name }}</div>
                            <div class="text-job text-muted"><small>{{ $user->golongan }}-{{ $user->pangkat }}</small></div>
                            <div class="footer py-2">
                                <a href="{{ route('user.edit', $user) }}" class="btn btn-warning mr-3" title="Ubah"><i class="ti-pencil"></i></a>
                                <button id="swall-delete" data-id="{{ $user->id }}" class="btn btn-danger" title="Hapus"><i class="ti-trash"></i></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container">
                {{ $users->onEachSide(5)->links() }}
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/js/page/element-ui.js') }}"></script>
    <script>
        $('#users-list').on('click', '#swall-delete', function () {
            let data = $(this).data()
            let user = data.id

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
                        url: `{{ url('user') }}/${user}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(res){
                            $(document).ajaxStop(function(){
                                setTimeout("window.location = 'user'",1000);
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
