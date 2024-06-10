@extends('index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg mt-14">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Buat Produk</h2>
                </div>
                <div>
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="javascript:void(0);"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Master
                                Data</a>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li>
                            <div class="flex items-center">
                                <a href="javascript:void(0);"
                                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Kelola
                                    Produk</a>
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
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <form action="" method="POST" class="space-y-4 md:space-y-6 needs-validation"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Kost</label>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type Kamar
                                Kost</label>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketentuan Pengajuan
                                Sewa</label>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                                Perbulannya</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
