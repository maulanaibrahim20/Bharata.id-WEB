@extends('index')
@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">{{ $title }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $breadcrumb }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb_active }}</li>
            </ol>
        </div>
        <div class="ms-auto pageheader-btn">
            <a href="{{ url('/admin/pengguna/member/create') }}" class="btn btn-success btn-icon text-white">
                <span>
                    <i class="fe fe-plus"></i>
                </span> {{ $button_create }}
            </a>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">No</th>
                                    <th class="wd-15p border-bottom-0">Nama Pengguna</th>
                                    <th class="wd-15p border-bottom-0 text-center">Jenis Kelamin</th>
                                    <th class="wd-15p border-bottom-0">Role</th>
                                    <th class="wd-25p border-bottom-0 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($member as $data)
                                    <tr class="border-bottom">
                                        <td class="text-muted fs-15 fw-semibold text-center">{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-md brround mt-1"
                                                    style="background-image:  url('{{ asset('' . $data->image) }}')"></span>
                                                <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-0 fs-14 fw-semibold">{{ $data->user->name }}</h6>
                                                    <span class="fs-12 text-muted">{{ $data->user->email }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @if ($data->jenis_kelamin == 'pria')
                                                <span
                                                    class="badge bg-primary me-1 mb-1 mt-1">{{ $data->jenis_kelamin }}</span>
                                            @elseif ($data->jenis_kelamin == 'wanita')
                                                <span
                                                    class="badge bg-success me-1 mb-1 mt-1">{{ $data->jenis_kelamin }}</span>
                                            @endif
                                        </td>

                                        <td class="text-success fs-15 fw-semibold">{{ $data->user->getAkses->name }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ url('admin/pengguna/member/' . $data->id . '/edit') }}"
                                                class="btn btn-icon btn-warning"><i class="fe fe-edit"></i></a>
                                            <a class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#SubCategoryModal{{ $data->id }}"><i
                                                    class="fe fe-eye"></i></a>
                                            <form id="deleteForm{{ $data->id }}"
                                                action="{{ url('/admin/pengguna/member/' . $data->id) }}"
                                                style="display: inline;" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="button" class="btn btn-danger deleteBtn"
                                                    data-id="{{ $data->id }}"><i class="ti ti-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @foreach ($users as $view)
        <div class="modal fade" id="modalCenter{{ $view->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Detail Akun : {{ $view->user->name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td>{{ $view->user->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Username</th>
                                    <td>{{ $view->user->username }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ $view->user->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Role</th>
                                    <td>{{ $view->user->getAkses->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kecamatan</th>
                                    <td> <span class="badge bg-primary">{{ $view->kecamatan->name }}</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Status</th>
                                    <td>
                                        @if ($view->user->email_verified_at)
                                            <span class="badge bg-primary">Terverifikasi</span>
                                        @else
                                            <span class="badge bg-warning">Belum Terverifikasi</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Nomor Telepon</th>
                                    <td>{{ $view->no_telp }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}
@endsection
@section('script')
    <script>
        $('.deleteBtn').on('click', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var deleteForm = $('#deleteForm' + id);
            Swal.fire({
                title: 'Anda yakin?',
                text: "Data akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteForm.submit();
                }
            });
        });
    </script>
@endsection
