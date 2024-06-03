@extends('index')
@section('content')
<div class="p-4 sm:ml-64">
    <div class="rounded-lg mt-14">
        <div class="bg-white rounded-lg shadow p-6">
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Tambah Data Produk</h1>
            <div>
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="javascript:void(0);" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Master Data</a>
                    </li>
                    <span class="mx-2 text-gray-400">/</span>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <a href="{{url ('admin/kelola/produk/')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">kelola Produk</a>
                        </div>
                    </li>
                    <span class="mx-2 text-gray-400">/</span>
                    <li class="flex items-center active" aria-current="page">
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            Tambah Produk
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
            <form action="{{ url('/admin/kelola/produk') }}" method="POST" class="space-y-4 md:space-y-6 needs-validation" enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                    <select name="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-bs-placeholder="Pilih Kategori">
                        <option value="">-- pilih --</option>
                        @foreach ($category as $cate)
                        <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name" placeholder="Pilih Produk">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Produk</label>
                    <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="price" placeholder="Harga Produk">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Produk</label>
                    <input type="number" name="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quantity Produk">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
                    <textarea class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="description" placeholder="Deskripsi Produk"></textarea>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Gambar Produk</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="image" type="file">
                </div>
                <button class="cursor-pointer bg-green-500 dark:bg-green-600 text-gray-200 dark:text-gray-700 px-3 py-2 rounded" type="submit">Submit </button>
            </form>
        </div>
    </div>
</div>
@endsection