@extends('index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg mt-14">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Tambah Data Produk</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                    </ol>
                </div>
                <div class="ms-auto pageheader-btn">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Elemen Formulir</h3>
                        </div>
                        <div class="card-body pt-2">
                            <form action="{{ url('/admin/kelola/produk') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Kategori</label>
                                    <select name="kategori" class="form-control form-select select2"
                                        data-bs-placeholder="Pilih Kategori">
                                        <option value="">-- pilih --</option>
                                        @foreach ($category as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama Produk</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Pilih Produk">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Detail Produk</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="number" class="form-control" name="price"
                                                placeholder="Harga Produk">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="fe fe-user"></i>
                                        </span>
                                        <input type="number" name="quantity" class="form-control"
                                            placeholder="Quantity Produk">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Deskripsi Produk</label>
                                        <div class="input-group">
                                            <textarea class="content" name="description" placeholder="Deskripsi Produk"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label mt-0">Upload Gambar Produk</label>
                                        <input class="form-control" name="image" type="file">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
