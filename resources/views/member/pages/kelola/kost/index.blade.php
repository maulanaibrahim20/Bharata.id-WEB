@extends('index')
@section('content')
<div class="p-4 sm:ml-64">
    <div class="rounded-lg mt-14">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Kelola Kost</h2>
                <a href="{{ route('member.kost.create') }}" class="px-2 py-1 bg-blue-500 dark:bg-blue-600 rounded hover:bg-blue-600 dark:hover:bg-blue-700 text-white dark:text-black">
                    <span>
                        <i class="bi bi-box-seam"></i>
                    </span>
                </a>
            </div>
            <div>
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="javascript:void(0);" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Master
                            Data</a>
                    </li>
                    <span class="mx-2 text-gray-400">/</span>
                    <li>
                        <div class="flex items-center">
                            <a href="javascript:void(0);" class="active text-sm font-medium text-gray-500 dark:text-gray-400">Kelola Kost</a>
                        </div>
                    </li>
                </ol>
            </div>
            <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                @if (session('success'))
                    <div class="alert alert-success bg-lime-400">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="basic-datatable">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Judul</th>
                            <th scope="col" class="px-6 py-3">Tag</th>
                            <th scope="col" class="px-6 py-3">Cerita Pemilik</th>
                            <th scope="col" class="px-6 py-3">Alamat</th>
                            <th scope="col" class="px-6 py-3">ketentuan Pengajuan Sewa</th>
                            <th scope="col" class="px-6 py-3">Tanggal Mulai Kos</th>
                            <th scope="col" class="px-6 py-3">Perbulan</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kosts as $kost)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $kost->id }}
                                </td>
                                <td scope="col" class="px-6 py-4">{{ $kost->judul }}</td>
                                <td scope="col" class="px-6 py-4">{{ $kost->tag }}</td>
                                <td scope="col" class="px-1 py-4">{{ $kost->cerita_pemilik }}</td>
                                <td scope="col" class="px-6 py-4">{{ $kost->alamat_kost }}</td>
                                <td scope="col" class="px-6 py-4">{{ $kost->ketentuan_pengajuan_sewa }}</td>
                                <td scope="col" class="px-6 py-4">{{ $kost->tanggal_mulai_kos }}</td>
                                <td scope="col" class="px-6 py-4">{{ $kost->perbulan }}</td>
                                <td scope="col" class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <a href="{{ route('member.kost.edit', $kost->id) }}"><button class="cursor-pointer font-medium px-2 py-1 rounded text-white dark:text-gray-200 bg-yellow-400 dark:bg-yellow-600"><i class="bi bi-pencil-square"></i></button></a>
                                        <a href="/#card-produk" target="_blank"><button class="cursor-pointer font-medium px-2 py-1 rounded text-white dark:text-gray-200 bg-purple-500 dark:bg-purple-600"><i class="bi bi-eye"></i></button></a>
                                        <a href="{{ route('member.kost.destroy', $kost->id) }}"><button class="font-medium cursor-pointer px-2 py-1 rounded text-white bg-red-500 dark:bg-red-600 delete-user deleteBtn"><i class="bi bi-trash"></i></button></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
