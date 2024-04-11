@extends('index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg mt-14">
            <div class="hidden md:block bg-white rounded-lg shadow p-6" id="user">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white"><i class="bi bi-person"></i>
                    {{ auth()->user()->name }}</h2>
                <div class="border-b border-gray-200 dark:border-gray-700 relative overflow-x-auto mb-3">
                    <ul class="flex text-sm font-medium text-center relative overflow-x-auto" id="default-tab"
                        data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                aria-controls="profile" aria-selected="false">Biodata Diri</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="daftar-alamat" data-tabs-target="#alamat" type="button" role="tab"
                                aria-controls="alamat" aria-selected="false">Daftar Alamat</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="pembayaran-tab" data-tabs-target="#pembayaran" type="button" role="tab"
                                aria-controls="pembayaran" aria-selected="false">Pembayaran</button>
                        </li>
                        <li role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="notifikasi-tab" data-tabs-target="#notifikasi" type="button" role="tab"
                                aria-controls="notifikasi" aria-selected="false">Notifikasi</button>
                        </li>
                        <li role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="mode-tab" data-tabs-target="#mode" type="button" role="tab" aria-controls="mode"
                                aria-selected="false">Mode Tampilan</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    <div class="hidden flex gap-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="w-auto max-w-sm max-h-full">
                            <div class="bg-white rounded-lg shadow p-3 shadow">
                                <div class="flex justify-center">
                                    <img src="{{ asset('storage/photo-user/' . auth()->user()->image) }}" alt="Foto Profil"
                                        class="w-auto max-w-xs rounded">
                                </div>
                                <form action="" class="mt-3" enctype="multipart/form-data" method="POST">
                                    <label for="file">
                                        <p
                                            class="block w-full p-2 text-center text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                            Pilih Foto</p>
                                        <input type="file" id="file" class="hidden" />
                                    </label>
                                    <small class="text-sm font-small text-gray-500 dark:text-gray-100">Besar file: maksimum
                                        10.000.000 bytes (10 Megabytes). Ekstensi file yang
                                        diperbolehkan: .JPG .JPEG .PNG</small>
                                    <div class="mt-3">
                                        <button
                                            class="text-white w-full bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                                            Simpan Foto
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="mt-3">
                                <button
                                    class="text-white w-full bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                                    Buat Kata Sandi
                                </button>
                            </div>
                        </div>
                        <div class="p-3">
                            <p class="text-lg font-normal font-semibold">Ubah Biodata Diri</p>
                            <div class="grid grid-cols-2 gap-5 mb-3 mt-3 relative overflow-x-auto">
                                <span>Nama</span>
                                <span>{{ auth()->user()->name }} <button
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        data-modal-target="modal-nama" data-modal-toggle="modal-nama">Ubah</button></span>
                                <span>Tanggal Lahir</span>
                                <a class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    data-modal-target="modal-date" data-modal-toggle="modal-date">Tambah Tanggal Lahir</a>
                                <span>Jenis Kelamin</span>
                                <a class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    data-modal-target="modal-gender" data-modal-toggle="modal-gender">Tambah Jenis
                                    Kelamin</a>
                            </div>
                            <p class="text-lg font-normal font-semibold">Ubah Kontak</p>
                            <div class="grid grid-cols-2 gap-5 mt-3 relative overflow-x-auto">
                                <span>Email</span>
                                <span>{{ auth()->user()->email }} <a
                                        class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        data-modal-target="modal-email" data-modal-toggle="modal-email">Ubah</a></span>
                                <span>Nomer HP</span>
                                <a class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    data-modal-target="modal-hp" data-modal-toggle="modal-hp">Tambah Nomer HP</a>
                            </div>
                            {{-- MODAL NAMA --}}
                            <div id="modal-nama" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        {{-- MODAL HEADER --}}
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <p class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Ubah Nama
                                            </p>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="modal-nama">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        {{-- END MODAL HEADER --}}
                                        {{-- MODAL BODY --}}
                                        <div class="p-4 md:p-5 space-y-4">
                                            <p class="text-m font-normal">Kamu hanya dapat mengubah nama 1 kali lagi.
                                                Pastikan nama sudah benar.</p>
                                            <form action="" method="POST">
                                                <div class="mb-3">
                                                    <label for="name"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                                    <input type="text" id="name" name="name"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <small class="text-sm font-small text-gray-500">Nama dapat dilihat oleh
                                                        pengguna lainnya</small>
                                                    @error('name')
                                                        <small class="text-red-500">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                            </form>
                                        </div>
                                        {{-- END MODAL BODY --}}
                                    </div>
                                </div>
                            </div>
                            {{-- END MODAL NAMA --}}
                            {{-- MODAL DATE --}}
                            <div id="modal-date" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        {{-- MODAL HEADER --}}
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <p class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Tambah Tanggal Lahir
                                            </p>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="modal-date">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        {{-- END MODAL HEADER --}}
                                        {{-- MODAL BODY --}}
                                        <div class="p-4 md:p-5 space-y-4">
                                            <p class="text-m font-normal">Kamu hanya dapat mengatur tanggal lahir satu
                                                kali. Pastikan tanggal lahir sudah benar.</p>
                                            <form action="" method="POST">
                                                <div class="mb-3">
                                                    <div class="grid grid-cols-3 gap-4">
                                                        <div>
                                                            <label for="day"
                                                                class="block text-sm font-medium text-gray-700">Hari</label>
                                                            <input type="text" name="day" id="day"
                                                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        </div>
                                                        <div>
                                                            <label for="month"
                                                                class="block text-sm font-medium text-gray-700">Bulan</label>
                                                            <input type="text" name="month" id="month"
                                                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        </div>
                                                        <div>
                                                            <label for="year"
                                                                class="block text-sm font-medium text-gray-700">Tahun</label>
                                                            <input type="text" name="year" id="year"
                                                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        </div>
                                                    </div>
                                                    @error('date')
                                                        <small class="text-red-500">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                            </form>
                                        </div>
                                        {{-- END MODAL BODY --}}
                                    </div>
                                </div>
                            </div>
                            {{-- END MODAL DATE --}}
                            {{-- MODAL GENDER --}}
                            <div id="modal-gender" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        {{-- MODAL HEADER --}}
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <p class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Tambah Jenis Kelamin
                                            </p>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="modal-gender">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        {{-- END MODAL HEADER --}}
                                        {{-- MODAL BODY --}}
                                        <div class="p-4 md:p-5 space-y-4">
                                            <p class="text-m font-normal">Kamu hanya dapat mengubah data jenis kelamin 1
                                                kali lagi. Pastikan data sudah benar</p>
                                            <form action="" method="POST">
                                                <div class="mb-3">
                                                    <div class="flex gap-3 justify-center">
                                                        <div class="flex items-center">
                                                            <input id="pria" type="radio" value=""
                                                                name="gender"
                                                                class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="pria"
                                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"><i
                                                                    class="bi bi-gender-male"></i> Pria</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="wanita" type="radio" value=""
                                                                name="gender"
                                                                class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="wanita"
                                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"><i
                                                                    class="bi bi-gender-female"></i> Wanita</label>
                                                        </div>
                                                    </div>
                                                    @error('gender')
                                                        <small class="text-red-500">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                            </form>
                                        </div>
                                        {{-- END MODAL BODY --}}
                                    </div>
                                </div>
                            </div>
                            {{-- END MODAL GENDER --}}
                            {{-- MODAL EMAIL --}}
                            <div id="modal-email" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        {{-- MODAL HEADER --}}
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <p class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Ubah Email
                                            </p>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="modal-email">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        {{-- END MODAL HEADER --}}
                                        {{-- MODAL BODY --}}
                                        <div class="p-4 md:p-5 space-y-4">
                                            <p class="text-m font-normal">Kamu hanya dapat mengubah email 1 kali lagi.
                                                Pastikan email sudah benar.</p>
                                            <form action="" method="POST">
                                                <div class="mb-3">
                                                    <label for="email"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                    <input type="email" id="email" name="email"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @error('email')
                                                        <small class="text-red-500">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                            </form>
                                        </div>
                                        {{-- END MODAL BODY --}}
                                    </div>
                                </div>
                            </div>
                            {{-- END MODAL EMAIL --}}
                            {{-- MODAL NOMER HP --}}
                            <div id="modal-hp" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        {{-- MODAL HEADER --}}
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <p class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Ubah Nomer HP
                                            </p>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="modal-hp">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        {{-- END MODAL HEADER --}}
                                        {{-- MODAL BODY --}}
                                        <div class="p-4 md:p-5 space-y-4">
                                            <p class="text-m font-normal">Kamu hanya dapat mengubah nomer HP 1 kali lagi.
                                                Pastikan email sudah benar.</p>
                                            <form action="" method="POST">
                                                <div class="mb-3">
                                                    <label for="phone"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer
                                                        HP</label>
                                                    <input type="phone" id="phone" name="phone"
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @error('telp')
                                                        <small class="text-red-500">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                            </form>
                                        </div>
                                        {{-- END MODAL BODY --}}
                                    </div>
                                </div>
                            </div>
                            {{-- END MODAL NOMER HP --}}
                        </div>
                    </div>
                    <div class="hidden p-4" id="alamat" role="tabpanel" aria-labelledby="daftar-alamat">
                        <div class="flex justify-beetwen">
                            <div class="">
                                <form action="" method="GET">
                                    <input type="text" placeholder="Search..."
                                        class="border border-gray-300 rounded-md px-4 py-2">
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded"><i
                                            class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <div class="ml-auto">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded"><i class="bi bi-plus-lg"></i>
                                    Tambah Alamat Baru</button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-4" id="pembayaran" role="tabpanel" aria-labelledby="pembayaran-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">INI MENU PEMBAYARAN</p>
                    </div>
                    <div class="hidden p-4" id="notifikasi" role="tabpanel" aria-labelledby="notifikasi-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">INI MENU NOTIFIKASI</p>
                    </div>
                    <div class="hidden p-4" id="mode" role="tabpanel" aria-labelledby="mode-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">INI MENU MODE TAMPILAN</p>
                    </div>
                </div>
            </div>
            {{-- INI TAMPILAN HP --}}
            <div class="block md:hidden bg-white rounded-lg shadow p-6" id="user">
                {{-- <h2 class="text-xl font-bold text-gray-900 dark:text-white"><i class="bi bi-person"></i>
                    {{ auth()->user()->name }}</h2>
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700"> --}}
                <h1 class="font-normal text-lg text-center">COMINGSOON</h1>
            </div>
            {{-- END TAMPILAN HP --}}
        </div>
    </div>
@endsection
