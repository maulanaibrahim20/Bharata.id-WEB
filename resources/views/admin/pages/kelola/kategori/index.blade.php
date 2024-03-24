@extends('index')
@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">{{ $title }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $breadcrumb }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb_item }}</li>
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
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">No</th>
                                    <th class="wd-15p border-bottom-0">Nama Kategori</th>
                                    <th class="wd-15p border-bottom-0">description</th>
                                    <th class="wd-15p border-bottom-0">image thumbnail</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nameInd }}</td>
                                        <td>
                                            @if ($data->descriptionInd)
                                                {{ $data->descriptionInd }}
                                            @else
                                                <span class="badge bg-danger">Null</span>
                                            @endif
                                        </td>
                                        <td><img src="{{ asset('category_thumbnail/thumbnail_1.jpg') }}"
                                                style="width:60px;height:60">
                                        </td>
                                        <td>
                                            <a class="btn btn-icon btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#EditModal{{ $data->id }}"><i
                                                    class="fe fe-edit"></i></a>
                                            <a class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#SubCategoryModal{{ $data->id }}"><i
                                                    class="fe fe-eye"></i></a>
                                            <form id="deleteForm{{ $data->id }}"
                                                action="{{ url('/admin/kelola/kategori/' . $data->id) }}"
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


    @foreach ($kategori as $data)
        <!-- Modal untuk menampilkan detail subkategori -->
        <div class="modal fade" id="SubCategoryModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Subkategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Subkategori</th>
                                    <th>Nama Slug</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->subcategories as $subcategory)
                                    <tr>
                                        <td>{{ $subcategory->nameInd }}</td>
                                        <td>{{ $subcategory->slug }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
