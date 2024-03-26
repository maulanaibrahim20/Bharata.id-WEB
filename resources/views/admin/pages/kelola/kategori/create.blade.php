@extends('index')
@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">{{ $title }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $breadcrumb }}</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $breadcrumb_item }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb_item_active }}</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
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

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ url('/admin/kelola/kategori') }}" enctype="multipart/form-data" method="post"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="validationCustom011">Nama Kategori</label>
                                <input type="text" class="form-control" id="validationCustom011" name="name"
                                    value="{{ old('name') }}" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="validationCustom12">Deskripsi</label>
                                <textarea name="description" class="form-control" id="validationCustom12" required>{{ old('description') }}</textarea>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="validationCustom15">Group Kategori</label>
                                <select name="group_kategori" id="group_kategori" class="form-control form-select select2">
                                    <option value="">-- pilih --</option>
                                    @foreach ($groupKategori as $data)
                                        <option value="{{ $data->name }}">
                                            {{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-12 col-sm-12 mb-3 mb-lg-0">
                                <label for="validationCustom12">Upload Gambar</label>
                                <input type="file" class="dropify" name="image" data-bs-height="180" />
                            </div>
                        </div>
                        <a href="{{ url('/admin/kelola/kategori') }}" class="btn btn-warning mr-6 mt-6">Back </a>
                        <button class="btn btn-danger mt-6" type="button">Delete</button>
                        <button class="btn btn-primary mt-6" type="submit">Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('button[type="button"]').on('click', function() {
                $('input[type="text"]').val('');
                $('textarea').val('');
                $('select').val('');
                $('.dropify-clear').click();
                $('.alert').html('').hide();
            });
        });
    </script>
@endsection
