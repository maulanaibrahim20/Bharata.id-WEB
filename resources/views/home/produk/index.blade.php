@extends('home.index')
@section('content')
    {{-- CONTENT --}}
    <div class="container p-3 mx-auto">
        <div class="hidden md:block">
            {{-- INI 3 GRID --}}
            <div class="grid grid-cols-3 gap-5">
                {{-- FOTO PRODUK --}}
                <div>
                    <img class="h-auto max-w-s mx-auto rounded" src="{{ url('foto_kost', $produk->foto1) }}"
                        alt="{{ $produk->judul }}" />
                    <div class="grid grid-cols-4 mt-2">
                        @if ($produk->foto2)
                            <img class="h-10 w-20 mx-auto rounded" src="{{ url('foto_kost', $produk->foto2) }}"
                                alt="{{ $produk->judul }}" data-modal-target="modal2" data-modal-toggle="modal2" />
                        @endif

                        <div id="modal2" tabindex="-1" aria-hidden="true"
                            class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" x-show="open">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="relative">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Foto Kost
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="modal2">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Image -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <img class="max-w-full rounded-lg" src="{{ url('foto_kost', $produk->foto2) }}"
                                                alt="{{ $produk->judul }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($produk->foto3)
                            <img class="h-10 w-20 mx-auto rounded" src="{{ url('foto_kost', $produk->foto3) }}"
                                alt="{{ $produk->judul }}" data-modal-target="modal3" data-modal-toggle="modal3">
                        @endif

                        <div id="modal3" tabindex="-1" aria-hidden="true"
                            class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" x-show="open">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="relative">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Foto Kost
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="modal3">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Image -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <img class="max-w-full rounded-lg" src="{{ url('foto_kost', $produk->foto3) }}"
                                                alt="{{ $produk->judul }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($produk->foto4)
                            <img class="h-10 w-20 mx-auto rounded" src="{{ url('foto_kost', $produk->foto4) }}"
                                alt="{{ $produk->judul }}" data-modal-target="modal4" data-modal-toggle="modal4" />

                            <div id="modal4" tabindex="-1" aria-hidden="true"
                                class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" x-show="open">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <div class="relative">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Foto Kost
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="modal4">
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
                                            <!-- Image -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <img class="max-w-full rounded-lg"
                                                    src="{{ url('foto_kost', $produk->foto5) }}"
                                                    alt="{{ $produk->judul }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($produk->foto5)
                            <img class="h-10 w-20 mx-auto rounded" src="{{ url('foto_kost', $produk->foto5) }}"
                                alt="{{ $produk->judul }}" data-modal-target="modal4" data-modal-toggle="modal4" />
                            <div id="modal5" tabindex="-1" aria-hidden="true"
                                class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" x-show="open">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <div class="relative">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Foto Kost
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="modal5">
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
                                            <!-- Image -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <img class="max-w-full rounded-lg"
                                                    src="{{ url('foto_kost', $produk->foto5) }}"
                                                    alt="{{ $produk->judul }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <hr class="mt-4 mb-2" />
                    {{-- INI RATING --}}
                    <div class="">
                        <h3 class="text-2xl font-normal font-semibold mb-3">Ratings</h3>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center space-x-1">
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star text-yellow-400"></i>
                            </div>
                            <button class="btn btn-outline-primary text-gray-400">Produk</button>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center space-x-1">
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star text-yellow-400"></i>
                            </div>
                            <button class="btn btn-outline-primary text-gray-400">Ketepatan Deskripsi</button>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center space-x-1">
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star text-yellow-400"></i>
                            </div>
                            <button class="btn btn-outline-primary text-gray-400">Komunikasi Toko</button>
                        </div>
                    </div>
                    {{-- END RATING --}}
                </div>
                {{-- END FOTO PRODUK --}}
                {{-- INI DESKRIPSI --}}
                <div class="overflow-y-auto max-h-[30rem] h-80" name='infopenting'>
                    <p class="font-normal text-2xl">{{ $produk->judul }}</p>

                    <div class="mt-1">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                            {{ $produk->tag }}
                        </span>
                    </div>

                    <div class="flex items-center gap-0 mt-4 mb-4">
                        <span class="font-normal font-semibold text-2xl">Rp{{ $produk->perbulan }}</span>
                        <span class="text-small">/bulan</span>
                    </div>

                    {{-- <div class="grid grid-cols-3 mt-3 gap-1">
                        <button
                            class="border border-gray-300 hover:border-gray-500 text-gray-700 hover:text-gray-900 font-medium p-2 rounded-md">Detail</button>
                        <button
                            class="border border-gray-300 hover:border-gray-500 text-gray-700 hover:text-gray-900 font-medium p-2 rounded-md">Fasilitas
                            Umum</button>
                        <button
                            class="border border-gray-300 hover:border-gray-500 text-gray-700 hover:text-gray-900 font-medium p-2 rounded-md">Fasilitas
                            Parkir</button>
                    </div> --}}

                    <div class="mt-2">
                        <p class="font-semibold">Deskripsi</p>
                        <small class="font-normal">{!! nl2br(htmlentities($produk->cerita_pemilik)) !!}</small>
                    </div>

                    @foreach ($facilities as $facility)
                        <div class="mt-2">
                            <p class="font-semibold">{!! nl2br(htmlentities($facility->type)) !!}</p>
                            <small class="font-normal">{!! nl2br(htmlentities($facility->facility)) !!}</small>
                        </div>
                    @endforeach

                    <div class="mt-2">
                        <p class="font-semibold">{!! nl2br(htmlentities($rules->type)) !!}</p>
                        <small class="font-normal">{!! nl2br(htmlentities($rules->rule)) !!}</small>
                    </div>

                    <div class="mt-2">
                        <p class="font-semibold">Ketentuan Pengajuan Sewa</p>
                        <small class="font-normal">{!! nl2br(htmlentities($produk->ketentuan_pengajuan_sewa)) !!}</small>
                    </div>

                    <div
                        class="mt-3 max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="container grid grid-cols-2 items-center justify-between">
                            <div class="flex gap-2 items-center">
                                <img src="https://flowbite.com/docs/images/examples/image-1@2x.jpg"
                                    class="rounded-full w-10 h-10 border" alt="profil mitra" />
                                <div class="flex flex-col gap-0">
                                    <span class="font-normal font-semibold">{{ $produk->member->nama_depan }}</span>
                                    <small class="text-gray-400">Online 2 jam lalu</small>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <a href="" class="bg-blue-500 text-white px-3 py-1 rounded-md">Follow</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END DESKRIPSI --}}
                {{-- INI CART --}}
                <div class="flex justify-end">
                    <div
                        class="max-w-xs p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <p class="font-normal mb-4">Atur jumlah sewa dan catatan</p>
                        <form>
                            <p class="block text-sm font-medium text-gray-700">Periode Sewa</p>
                            <div class="mb-4 flex gap-3 items-center">
                                <input type="date" id="start_date" name="start_date"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                -
                                <input type="date" id="end_date" name="end_date"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            </div>
                            <div class="mb-4 flex items-center">
                                <label for="quantity" class="block text-sm font-medium text-gray-700">Jumlah
                                    Barang</label>
                                <div class="flex items-center px-3">
                                    <button type="button"
                                        class="w-full bg-blue-500 text-white text-center px-4 py-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600 rounded-l-lg"
                                        onclick="decrement()">-</button>
                                    <input type="text" id="quantity" name="quantity" min="1" value="0"
                                        class="w-16 bg-gray-50 text-center border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-center rounded-none">
                                    <button type="button"
                                        class="w-full bg-blue-500 text-white text-center px-4 py-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600 rounded-r-lg"
                                        onclick="increment()">+</button>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                                <textarea id="address" name="address"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="extras" class="block text-sm font-medium text-gray-700">Extras</label>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" id="extras" name="extras"
                                        class="mt-1 border-gray-300 rounded shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    <span>Additional driver</span>
                                </div>
                            </div>
                            <hr class="mb-3" />
                            <div class="mb-4">
                                <p class="font-medium">Harga Sewa: Rp{{ $produk->perbulan }}</p>
                                <p class="font-medium">Total: Rp{{ $produk->perbulan }}</p>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                    Tambah ke Keranjang
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- END CART --}}
            </div>
            {{-- END 3 GRID --}}
            {{-- ULASAN --}}
            <div>
                <div>
                    <h3 class="font-normal font-semibold text-2xl">Ulasan</h3>
                </div>
                <div
                    class="mt-3 max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    {{-- ULASAN USER --}}
                    {{-- Loop through reviews --}}
                    <div class="flex items-center gap-2">
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" alt="FOTO ULASAN USER"
                            class="rounded-full w-10 h-10 border" />
                        <div class="flex flex-col gap-0">
                            <span class="font-normal font-semibold">Anwar Musyadad <span
                                    class="font-normal text-gray-400 text-xs">22-04-2024</span></span>
                            <small class="font-normal text-gray-400">{{$review->review}}</small>
                        </div>
                    </div>
                    {{-- END ULASAN USER --}}
                    {{-- <hr class="my-2"> --}}
                    </hr>
                    {{-- ULASAN ADMIN(MITRA) --}}
                    {{-- <div class="flex items-center gap-2 ml-3">
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" alt="FOTO ULASAN USER"
                            class="rounded-full w-10 h-10 border" />
                        <div class="flex flex-col gap-0">
                            <span class="font-normal font-semibold">Austyn Murazik <span
                                    class="font-normal font-semibold text-xs text-blue-500">Admin(Mitra
                                    Sewa)</span></span>
                            <small class="font-normal text-gray-400">Makasih sudah pakai jasa sewa rental kami
                                :)</small>
                        </div>
                    </div> --}}
                    {{-- END ULASAN ADMIN(MITRA) --}}
                </div>
            </div>
            {{-- END ULASAN --}}
            <hr class="my-4" />
            {{-- PRODUK SERUPA --}}
            <div>
                <h3 class="font-normal font-semibold text-2xl">Produk Serupa</h3>
                <div class="mt-3 grid grid-cols-4 gap-4">
                    @foreach ($kost as $items)
                        <a href="{{ url('home/produk/' . $items->id) }}" class="w-full max-w-m p-3">
                            <div>
                                <img src="{{ url('foto_kost', $items->foto1) }}" class="h-auto max-w-full rounded-lg" />
                            </div>
                            <div class="mt-1">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                    {{ $items->tag }}
                                </span>
                            </div>
                            <div class="mt-1">
                                <p class="font-normal">{{ Str::limit($items->judul, 50) }}</p>
                                <p class="text-sm font-normal font-semibold">{{ $items->alamat_kost }}</p>
                                <p class="text-sm font-normal text-gray-600">{{ Str::limit($items->cerita_pemilik, 50) }}
                                </p>
                                <div>
                                    <span class="text-lg font-normal  font-semibold">Rp{{ $items->perbulan }}</span><span
                                        class="text-sm">/bulan</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            {{-- END PRODUK SERUPA --}}
        </div>
        <div name='hp' class="block md:hidden">
            COMING SOON
        </div>
    </div>
    {{-- END CONTENT --}}
    <br />
    <br />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        function increment() {
            var input = document.getElementById('quantity');
            input.value = parseInt(input.value) + 1;
        }

        function decrement() {
            var input = document.getElementById('quantity');
            input.value = parseInt(input.value) - 1;
            if (input.value < 1) {
                input.value = 1;
            }
        }
    </script>
@endsection
