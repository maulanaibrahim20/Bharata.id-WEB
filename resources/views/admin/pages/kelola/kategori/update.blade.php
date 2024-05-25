@extends('index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg mt-14">
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ $title }}</h2>
                <div class="page-header">
                    <div>
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
                                <form action="{{ url('/admin/kelola/kategori/' . $category->id) }}"
                                    enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Nama Kategori</label>
                                            <input type="text" value="{{ $category->name }}" class="form-control"
                                                id="validationCustom011" name="name" value="{{ old('name') }}"
                                                required>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom12">Deskripsi</label>
                                            <input type="text" name="description" value="{{ $category->description }}"
                                                class="form-control" id="validationCustom12"
                                                required>{{ old('description') }}</input>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom15">Group Kategori</label>
                                            <select name="group_kategori" id="group_kategori"
                                                class="form-control form-select select2">
                                                <option value="">-- pilih --</option>
                                                @foreach ($groupKategori as $data)
                                                    <option value="{{ $data->name }}"
                                                        {{ $data->name == $category->group ? 'selected' : '' }}>
                                                        {{ $data->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 mb-3 mb-lg-0">
                                            <label for="validationCustom12">Gambar Saat ini </label>
                                            <img src="{{ asset($category->imageHomeThumbnailUrl) }}" width="180"
                                                height="180" alt="Gambar Kategori">
                                        </div>
                                        <div class="col-lg-12 col-sm-12 mb-3 mb-lg-0">
                                            <label for="validationCustom12">Upload Gambar</label>
                                            <input type="file" class="dropify" name="image" data-bs-height="180" />
                                        </div>
                                    </div>
                                    <a href="{{ url('/admin/kelola/kategori') }}" class="btn btn-warning mr-6 mt-6">Back
                                    </a>
                                    <button class="btn btn-danger mt-6" type="button">Delete</button>
                                    <button class="btn btn-primary mt-6" type="submit">Submit </button>
                                </form>
                            </div>
                        </div>
                    </div>
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
