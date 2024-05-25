@extends('index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg mt-14">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-bold text-gray-900 dark:text-white">{{ $title }}</h1>
                </div>
                <div>
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="javascript:void(0);"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">{{ $breadcrumb }}</a>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li>
                            <div class="flex items-center">
                                <a href="javascript:void(0);"
                                    class="active text-sm font-medium text-gray-500 dark:text-gray-400">{{ $breadcrumb_item }}</a>
                            </div>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li class="flex items-center active" aria-current="page">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                {{ $breadcrumb_item_active }}
                            </span>
                        </li>
                    </ol>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
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
                    class="space-y-4 md:space-y-6 needs-validation" novalidate>
                    @csrf
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="validationCustom011">Nama Kategori</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            id="validationCustom011" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="validationCustom12">Deskripsi</label>
                        <textarea name="description" style="resize: none"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            id="validationCustom12" required>{{ old('description') }}</textarea>

                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="validationCustom15">Group Kategori</label>
                        <select name="group_kategori" id="group_kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 select2">
                            <option value="">-- pilih --</option>
                            @foreach ($groupKategori as $data)
                                <option class="" value="{{ $data->name }}">
                                    {{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="validationCustom12">Upload Gambar</label>
                        <input type="file"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-0.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dropify"
                            name="image" data-bs-height="180" />
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="{{ url('/admin/kelola/kategori') }}"
                            class="bg-blue-500 dark:bg-blue-600 text-gray-200 dark:text-gray-700 px-2 py-1 rounded">Back</a>
                        <button
                            class="cursor-pointer bg-red-500 dark:bg-red-600 text-gray-200 dark:text-gray-700 px-2 py-1 rounded"
                            type="button">Delete</button>
                        <button
                            class="cursor-pointer bg-green-500 dark:bg-green-600 text-gray-200 dark:text-gray-700 px-2 py-1 rounded"
                            type="submit">Submit </button>
                    </div>
                </form>
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
