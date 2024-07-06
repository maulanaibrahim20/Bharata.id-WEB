@extends('index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg mt-14">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Kelola Produk</h2>
                    <a href="{{ url('/admin/kelola/produk/create') }}"
                        class="px-2 py-1 bg-blue-500 dark:bg-blue-600 rounded hover:bg-blue-600 dark:hover:bg-blue-700 text-white dark:text-black">
                        <span>
                            <i class="bi bi-plus-square"></i>
                        </span>
                    </a>
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
                                    class="active text-sm font-medium text-gray-500 dark:text-gray-400">Kelola Produk</a>
                            </div>
                        </li>
                    </ol>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                <form class="max-w-md mx-auto mb-2" action="" method="GET">
                    <label for="search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <i class="bi bi-search"></i>
                        </div>
                        <input type="search" id="searchProduct"
                            class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Users" name='search' value="" />
                        <button type="submit"
                            class="text-white absolute end-2 bottom-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i
                                class="bi bi-search"></i></button>
                    </div>
                </form>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                        id="basic-datatable">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-3">No</th>
                                <th class="px-6 py-3">Nama Produk</th>
                                <th class="px-6 py-3">Deskripsi Produk</th>
                                <th class="px-6 py-3">image</th>
                                <th class="px-6 py-3">Harga</th>
                                <th class="px-6 py-3">Qty</th>
                                <th class="px-6 py-3">active</th>
                                <th class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $data)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}</td>
                                    <td class="px-6 py-4">{{ $data->name }}</td>
                                    <td class="px-6 py-4">{{ $data->description }}</td>
                                    <td class="px-6 py-4"><img src="{{ asset('/image_produk/' . $data->image) }}"
                                            style="width:60px;height:60">
                                    </td>
                                    <td class="px-6 py-4">{{ 'Rp ' . number_format($data->price, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4">{{ $data->quantity }}</td>
                                    <td class="px-6 py-4">
                                        @if ($data->active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Nonaktif</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('admin.produk.edit', $data->id) }}"
                                            class="cursor-pointer font-medium px-2 py-1 rounded dark:text-gray-200 bg-yellow-400 dark:bg-yellow-600"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <a class="font-medium px-2 py-1 rounded cursor-pointer text-white dark:text-gray-700 bg-blue-500 dark:bg-blue-600"
                                            data-modal-toggle="default-modal{{ $data->id }}"
                                            data-modal-target="default-modal{{ $data->id }}"><i
                                                class="bi bi-eye"></i></a>
                                        <form id="deleteForm{{ $data->id }}"
                                            action="{{ url('/admin/kelola/produk/' . $data->id) }}"
                                            style="display: inline;" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button"
                                                class="font-medium cursor-pointer px-2 py-1 rounded text-white bg-red-500 dark:bg-red-600 delete-user deleteBtn"
                                                data-id="{{ $data->id }}"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- start view modal --}}
                @foreach ($products as $data)
                    <div class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
                        id="default-modal{{ $data->id }}" tabindex="-1" aria-hidden="true">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h5 class="text-xl font-semibold text-gray-900 dark:text-white" id="exampleModalLabel">
                                        Detail Produk</h5>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="default-modal{{ $data->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <div class="p-4 md:p-5 space-y-4">
                                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th class="px-6 py-3">Nama Produk</th>
                                                    <th class="px-6 py-3">Deskripsi Produk</th>
                                                    <th class="px-6 py-3">Harga</th>
                                                    <th class="px-6 py-3">Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ $data->name }}</td>
                                                    <td class="px-6 py-4">{{ $data->description }}</td>
                                                    <td class="px-6 py-4">{{ $data->price }}</td>
                                                    <td class="px-6 py-4">{{ $data->quantity }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button type="button"
                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                        data-modal-hide="default-modal{{ $data->id }}">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- end view modal --}}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.deleteBtn').on('click', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var deleteForm = $('#deleteForm' + id);
            Swal.fire({
                title: 'Anda yakin?',
                text: "Data akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteForm.submit();
                }
            });
        });

        let input = $('#searchProduct')

        $(input).keyup(function(e) {
            let value = $(this).val().toLowerCase()
            console.log(value)
            $('#basic-datatable tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            })
            console.log(value)
        });
    </script>
@endsection
