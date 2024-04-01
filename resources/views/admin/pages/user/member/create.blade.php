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
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $card_title }}</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="formMember" action="{{ url('/admin/pengguna/member') }}" enctype="multipart/form-data"
                            method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="col-lg-12 col-md-12 col-xl-6 mb-6">
                                <div class="wideget-user-desc d-sm-flex">
                                    <div class="wideget-user-img">
                                        <input type="file" id="imageInput" accept="image/*" class="upload-input"
                                            name="image">
                                        <label for="imageInput" class="upload-label"
                                            style="cursor: pointer; position: relative; display: inline-block;">
                                            <img id="preview-image" class="rounded-circle"
                                                src="{{ url('/assets') }}/images/users/8.jpg" alt="img"
                                                style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="validationCustom011">Nama Depan</label>
                                    <input type="text" class="form-control" id="validationCustom011" name="nama_depan"
                                        value="{{ old('nama_depan') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="validationCustom12">Nama Belakang</label>
                                    <input type="text" name="nama_belakang" class="form-control" id="validationCustom12"
                                        value="{{ old('nama_belakang') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="validationCustom011">Email</label>
                                    <input type="email" class="form-control" id="validationCustom011" name="email"
                                        value="{{ old('email') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="validationCustom12">Tanggal Lahir</label>
                                    <div class="wd-200 mg-b-30">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                            </div>
                                            <input class="form-control fc-datepicker" id="datepicker-date"
                                                placeholder="MM/DD/YY" name="tanggal_lahir" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="validationCustom011">No Telepon</label>
                                    <input type="number" class="form-control" id="validationCustom011" name="no_telp"
                                        value="{{ old('no_telp') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <div class="form-label">Jenis Kelamin</div>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="jenis_kelamin"
                                            value="pria" checked>
                                        <span class="custom-control-label">Pria</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="jenis_kelamin"
                                            value="wanita">
                                        <span class="custom-control-label">Wanita</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label class="form-label">Provinsi</label>
                                    <select name="provinsi" id="provinsi" class="form-control form-select select2">
                                        <option value="">--pilih--</option>
                                        @foreach ($provinsi as $item)
                                            <option data-tokens="{{ $item['name'] }}" value="{{ $item['id'] }}">
                                                {{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label class="form-label">Kota</label>
                                    <select name="kota" id="kota_kab" class="form-control form-select select2">
                                        <option value="">-- pilih --</option>
                                    </select>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label class="form-label">Kecamatan</label>
                                    <select name="kecamatan" id="kecamatan" class="form-control form-select select2">
                                        <option value="">-- pilih --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="form-label">Detail Alamat</label>
                                <textarea class="content" name="alamat_utama"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="validationCustom011">Kode Pos</label>
                                    <input type="number" class="form-control" id="validationCustom011" name="kode_pos"
                                        value="{{ old('kode_pos') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#provinsi").change(function() {
                let provinsi = $("#provinsi").val(); // Mengambil nilai kota/kabupaten yang dipilih
                $.ajax({
                    url: "{{ url('/admin/wilayah/getKota') }}",
                    type: "GET",
                    data: {
                        provinsi: provinsi
                    },
                    success: function(res) {
                        $("#kota_kab").html(res);
                    },
                    error: function(xhr, status, error) {
                        swal.fire({
                            icon: 'error',
                            title: 'Gagal Mengambil Data',
                            text: 'Terjadi kesalahan saat mengambil data kota/kabupaten: ' +
                                error
                        });
                    }
                });
            });

            $("#kota_kab").change(function() {
                let kota_kab = $("#kota_kab").val();
                $.ajax({
                    url: "{{ url('/admin/wilayah/getKecamatan') }}",
                    type: "GET",
                    data: {
                        kota_kab: kota_kab
                    },
                    success: function(res) {
                        $("#kecamatan").html(res);
                    },
                    error: function(xhr, status, error) {
                        swal.fire({
                            icon: 'error',
                            title: 'Gagal Mengambil Data',
                            text: 'Terjadi kesalahan saat mengambil data kecamatan: ' +
                                error
                        });
                    }
                });
            });
            $('#datepicker-date').datepicker({
                format: 'mm/dd/yyyy', // Format tanggal yang diinginkan
                autoclose: true,
                todayHighlight: true,
                orientation: "bottom"
            });
            $('#imageInput').change(function(event) {
                var input = event.target;
                var reader = new FileReader();
                reader.onload = function() {
                    var dataURL = reader.result;
                    $('#preview-image').attr('src', dataURL);
                };
                reader.readAsDataURL(input.files[0]);
            });

            // $('#formMember').submit(function(event) {
            //     event.preventDefault();
            //     var formData = new FormData($(this)[0]);

            //     $.ajax({
            //         url: $(this).attr('action'),
            //         type: 'POST',
            //         data: formData,
            //         async: false,
            //         cache: false,
            //         contentType: false,
            //         processData: false,
            //         success: function(response) {
            //             console.log('Sukses:', response);
            //         },
            //         error: function(response) {
            //             console.log('Error:', response);
            //         }
            //     });
            // });
        });
    </script>
@endsection
