@extends('index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg mt-14">
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ $title }}</h2>
                <div>
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                Home
                            </a>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li>
                            <div class="flex items-center">
                                <a href="javascript:void(0);"
                                    class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $breadcrumb }}</a>
                            </div>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <span
                                    class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $breadcrumb_active }}</span>
                            </div>
                        </li>
                    </ol>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                @if (session('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-blue-400">
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                    @endif @if ($errors->any())
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                            <ul class="font-medium">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="space-y-4 md:space-y-6 needs-validation" id="formMember"
                        action="{{ route('user.store') }}" enctype="multipart/form-data" method="POST"
                        novalidate>
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="validationCustom011">Nama</label>
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    id="validationCustom011" name="nama" required>
                                @error('nama_depan')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="validationCustom011">Email</label>
                                <input type="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    id="validationCustom011" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="validationCustom011">Password</label>
                                <input type="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    id="validationCustom011" name="password" value="{{ old('email') }}" required>
                                @error('email')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="validationCustom011">Role</label>
                                <select name="role" id="" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="1">ADMIN_APP</option>
                                    <option value="2">MEMBER</option>
                                </select>
                                @error('email')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
                            <button
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="submit">Submit</button>
                        </div>
                    </form>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#datepicker-date", {
                dateFormat: "m/d/Y",
                altInput: true,
                altFormat: "F j, Y",
                allowInput: true,
                locale: {
                    firstDayOfWeek: 1
                }
            });
        });
    </script>
@endsection
