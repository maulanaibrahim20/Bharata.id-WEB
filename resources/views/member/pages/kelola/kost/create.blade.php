@extends('index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg mt-14">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Buat Kost</h2>
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
                                    Kost</a>
                            </div>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li class="flex items-center active" aria-current="page">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Tambah Kost
                            </span>
                        </li>
                    </ol>
                </div>
            </div>



            <div class="bg-white rounded-lg shadow p-6">
                @if (session('success'))
                    <div class="alert alert-success bg-lime-400">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('member.kost.store') }}" method="POST"
                    class="space-y-4 md:space-y-6 needs-validation" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Kost</label>
                        <input required
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="image" type="file" accept="image/*">
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 
                                                      sm:text-sm rounded-lg focus:ring-primary-600 
                                                      focus:border-primary-600 w-full px-1 py-2 
                                                      dark:bg-gray-700 dark:border-gray-600 
                                                      dark:placeholder-gray-400 dark:text-white 
                                                      dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="title" placeholder="Masukkan Judul" required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type Kamar
                                Kost</label>
                            <select name="category" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                data-bs-placeholder="Pilih Kategori">
                                <option value="">-- pilih --</option>
                                <option value="kost putra">Kost putra</option>
                                <option value="kost putri">Kost putri</option>
                                <option value="kost campur">Kost campur</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 
                                                      sm:text-sm rounded-lg focus:ring-primary-600 
                                                      focus:border-primary-600 w-full px-1 py-2 
                                                      dark:bg-gray-700 dark:border-gray-600 
                                                      dark:placeholder-gray-400 dark:text-white 
                                                      dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="description" placeholder="Masukkan Deskripsi" required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 
                                                      sm:text-sm rounded-lg focus:ring-primary-600 
                                                      focus:border-primary-600 w-full px-1 py-2 
                                                      dark:bg-gray-700 dark:border-gray-600 
                                                      dark:placeholder-gray-400 dark:text-white 
                                                      dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="address" placeholder="Masukkan Alamat" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketentuan Pengajuan
                                Sewa</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 
                                                      sm:text-sm rounded-lg focus:ring-primary-600 
                                                      focus:border-primary-600 w-full px-1 py-2 
                                                      dark:bg-gray-700 dark:border-gray-600 
                                                      dark:placeholder-gray-400 dark:text-white 
                                                      dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="rent_rule" placeholder="Masukkan Ketentuan Pengajuan Sewa" required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                                Perbulannya</label>
                            <input type="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 
                                                      sm:text-sm rounded-lg focus:ring-primary-600 
                                                      focus:border-primary-600 w-full px-1 py-2 
                                                      dark:bg-gray-700 dark:border-gray-600 
                                                      dark:placeholder-gray-400 dark:text-white 
                                                      dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="monthly_price" placeholder="Masukkan Harga Sewa" required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cerita
                                Pemilik</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 
                                                      sm:text-sm rounded-lg focus:ring-primary-600 
                                                      focus:border-primary-600 w-full px-1 py-2 
                                                      dark:bg-gray-700 dark:border-gray-600 
                                                      dark:placeholder-gray-400 dark:text-white 
                                                      dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="owner_story" placeholder="Masukkan Cerita Pemilik" required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai
                                Kost</label>
                            <input type="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 
                                                      sm:text-sm rounded-lg focus:ring-primary-600 
                                                      focus:border-primary-600 w-full px-1 py-2 
                                                      dark:bg-gray-700 dark:border-gray-600 
                                                      dark:placeholder-gray-400 dark:text-white 
                                                      dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="start_date" placeholder="Masukkan Cerita Pemilik" required>
                        </div>
                        <div>
                            <button
                                class="cursor-pointer bg-green-500 dark:bg-green-600 text-gray-200 dark:text-gray-700 px-3 py-2 rounded mt-6"
                                type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
