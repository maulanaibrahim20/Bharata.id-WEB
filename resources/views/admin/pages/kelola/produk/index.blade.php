@extends('index')
@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Data Table</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </div>
        <div class="ms-auto pageheader-btn">
            <a href="{{ url('/admin/kelola/produk/create') }}" class="btn btn-success btn-icon text-white">
                <span>
                    <i class="fe fe-plus"></i>
                </span> Tambah Data Produk
            </a>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Basic Datatable</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">No</th>
                                    <th class="wd-15p border-bottom-0">Nama Produk</th>
                                    <th class="wd-20p border-bottom-0">Deskripsi Produk</th>
                                    <th class="wd-15p border-bottom-0">image</th>
                                    <th class="wd-10p border-bottom-0">Harga</th>
                                    <th class="wd-25p border-bottom-0">Qty</th>
                                    <th class="wd-25p border-bottom-0">active</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td><img src="{{ asset('/image_produk/' . $data->image) }}"
                                                style="width:60px;height:60"></td>
                                        <td>{{ 'Rp ' . number_format($data->price, 0, ',', '.') }}</td>
                                        <td>{{ $data->quantity }}</td>
                                        <td>
                                            @if ($data->active)
                                                <span class="badge bg-success">Aktif</span>
                                            @else
                                                <span class="badge bg-danger">Nonaktif</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-icon btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#EditModal{{ $data->id }}"><i
                                                    class="fe fe-edit"></i></a>
                                            <form id="deleteForm{{ $data->id }}"
                                                action="{{ url('/admin/kelola/produk/' . $data->id) }}"
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
