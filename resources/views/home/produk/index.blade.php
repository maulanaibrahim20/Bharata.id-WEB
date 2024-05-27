<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Bharata.id</title>
</head>

<body>
    @include('components.navbar')

    {{-- CONTENT --}}
    <div class="container p-3 mx-auto">
        {{-- <div class="md:hidden mb-3 gap-2">
            <a href="{{ url('home') }}" class="text-2xl dark:text-white"><i class="bi bi-arrow-left-circle"></i></a>
            <span class="font-normal text-2xl">Toyota Raize</span>
        </div> --}}
        <div class="hidden md:block">
            {{-- INI 3 GRID --}}
            <div class="grid grid-cols-3 gap-5">
                {{-- FOTO PRODUK --}}
                <div>
                    <img class="h-auto max-w-s mx-auto rounded"
                        src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" alt="image description">
                    <div class="flex mt-2">
                        <img class="h-10 w-20 mx-auto rounded"
                            src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" alt="image description">
                        <img class="h-10 w-20 mx-auto rounded"
                            src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" alt="image description">
                        <img class="h-10 w-20 mx-auto rounded"
                            src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" alt="image description">
                        <img class="h-10 w-20 mx-auto rounded"
                            src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" alt="image description">
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
                    <p class="font-normal text-2xl">Toyota Raize</p>
                    <div class="grid grid-cols-3 hidden md:block gap-1">
                        <small>Sisa Mobil <span class="text-gray-400">(30)</span></small>
                        <small>5 <span class="text-gray-400">(287 rating)</span></small>
                        <small>Diskusi <span class="text-gray-400">(37)</span></small>
                    </div>
                    <div class="flex items-center gap-1 mt-4 mb-4">
                        <h2 class="font-normal font-semibold text-3xl">Rp 550.000</h2>
                        <span class="text-gray-400 text-small">/hari</span>
                    </div>
                    <div class="grid grid-cols-3 mt-3 gap-1">
                        <button
                            class="border border-gray-300 hover:border-gray-500 text-gray-700 hover:text-gray-900 font-medium p-2 rounded-md">Detail</button>
                        <button
                            class="border border-gray-300 hover:border-gray-500 text-gray-700 hover:text-gray-900 font-medium p-2 rounded-md">Spesifikasi</button>
                        <button
                            class="border border-gray-300 hover:border-gray-500 text-gray-700 hover:text-gray-900 font-medium p-2 rounded-md">Info
                            Penting</button>
                    </div>
                    <div class="mt-2">
                        <?php
                        $deskripsi = "Deskripsi Barang\nHarga Khusus Lebaran\n\nSyarat dan Ketentuan:\n- Harga sewa untuk pemakaian harian, maximum pengembalian jam 23:59\n- Harga sewa untuk pemakaian Jakarta\n\nBatasan Kilometer:\nMaksimal Km: 100km/hari\nKelebihan pemakaian dikenakan Rp1,500/km\n\nSebelum memesan, WAJIB membaca syarat dan ketentuan di bawah ini:\nUntuk semua penyewaan Lepas Kunci, mohon menghubungi kami untuk verifikasi data diri.\n\nSyarat Menyewa:\n- ID Card (KTP / KITAS)\n- Valid Driver’s License (SIM A)\n- Family Card (Kartu Keluarga)\n- Tax ID Card (NPWP)\n- Proof of Address (PBB Rumah)";

                        echo '<small class:"font-normal">' . nl2br($deskripsi) . '</small>';
                        ?>
                    </div>
                    <div
                        class="mt-3 max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="container grid grid-cols-2 items-center justify-between">
                            <div class="flex gap-2 items-center">
                                <img src="https://flowbite.com/docs/images/examples/image-1@2x.jpg"
                                    class="rounded-full w-10 h-10 border" alt="profil mitra" />
                                <div class="flex flex-col gap-0">
                                    <span class="font-normal font-semibold">Austyn Murazik</span>
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
                                    <input type="text" id="quantity" name="quantity" min="1"
                                        value="0"
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
                                <p class="font-medium">Harga Sewa: Rp 550.000</p>
                                <p class="font-medium">Total: Rp 550.000</p>
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
                    <div class="flex items-center gap-2">
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" alt="FOTO ULASAN USER" class="rounded-full w-10 h-10 border" />
                        <div class="flex flex-col gap-0">
                            <span class="font-normal font-semibold">Bima Ryan Alfarizi <span
                                    class="font-normal text-gray-400 text-xs">22-04-2024</span></span>
                            <small class="font-normal text-gray-400">Pelayanan nya bagus</small>
                        </div>
                    </div>
                    {{-- END ULASAN USER --}}
                    <hr class="my-2">
                    </hr>
                    {{-- ULASAN ADMIN(MITRA) --}}
                    <div class="flex items-center gap-2 ml-3">
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" alt="FOTO ULASAN USER" class="rounded-full w-10 h-10 border" />
                        <div class="flex flex-col gap-0">
                            <span class="font-normal font-semibold">Austyn Murazik <span
                                    class="font-normal font-semibold text-xs text-blue-500">Admin(Mitra
                                    Sewa)</span></span>
                            <small class="font-normal text-gray-400">Makasih sudah pakai jasa sewa rental kami
                                :)</small>
                        </div>
                    </div>
                    {{-- END ULASAN ADMIN(MITRA) --}}
                </div>
            </div>
            {{-- END ULASAN --}}
            <hr class="my-4" />
            {{-- PRODUK SERUPA --}}
            <div>
                <h3 class="font-normal font-semibold text-2xl">Produk Serupa</h3>
                <div class="mt-3 grid grid-cols-4 gap-4">
                    <a href="{{ url('home/produk') }}"
                        class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                            class="h-auto max-w-full rounded-lg" />
                        <p class="font-normal font-semibold">Toyota Raize</p>
                        <p class="text-sm font-normal">Kedai Kita</p>
                        <p class="text-lg font-normal  font-semibold">Rp 550.000 <span
                                class="text-sm text-gray-500">/hari</span></p>
                        <p class="text-sm font-normal text-gray-500">Indramayu</p>
                        <p class="text-sm font-normal text-gray-500" style="font-size: 10px">4.7 | 255+ rental</p>
                    </a>
                    <a href="{{ url('home/produk') }}"
                        class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                            class="h-auto max-w-full rounded-lg" />
                        <p class="font-normal font-semibold">Toyota Raize</p>
                        <p class="text-sm font-normal">Kedai Kita</p>
                        <p class="text-lg font-normal  font-semibold">Rp 550.000 <span
                                class="text-sm text-gray-500">/hari</span></p>
                        <p class="text-sm font-normal text-gray-500">Indramayu</p>
                        <p class="text-sm font-normal text-gray-500" style="font-size: 10px">4.7 | 255+ rental</p>
                    </a>
                    <a href="{{ url('home/produk') }}"
                        class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                            class="h-auto max-w-full rounded-lg" />
                        <p class="font-normal font-semibold">Toyota Raize</p>
                        <p class="text-sm font-normal">Kedai Kita</p>
                        <p class="text-lg font-normal  font-semibold">Rp 550.000 <span
                                class="text-sm text-gray-500">/hari</span></p>
                        <p class="text-sm font-normal text-gray-500">Indramayu</p>
                        <p class="text-sm font-normal text-gray-500" style="font-size: 10px">4.7 | 255+ rental</p>
                    </a>
                    <a href="{{ url('home/produk') }}"
                        class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                            class="h-auto max-w-full rounded-lg" />
                        <p class="font-normal font-semibold">Toyota Raize</p>
                        <p class="text-sm font-normal">Kedai Kita</p>
                        <p class="text-lg font-normal  font-semibold">Rp 550.000 <span
                                class="text-sm text-gray-500">/hari</span></p>
                        <p class="text-sm font-normal text-gray-500">Indramayu</p>
                        <p class="text-sm font-normal text-gray-500" style="font-size: 10px">4.7 | 255+ rental</p>
                    </a>
                </div>
            </div>
            {{-- END PRODUK SERUPA --}}
        </div>
        <div name='hp' class="block md:hidden">
            COMING SOON
        </div>
    </div>
    {{-- END CONTENT --}}
    <br/>
    <br/>

    {{-- FOOTER --}}
    @include('components.footer')
    {{-- END FOOTER --}}

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
</body>

</html>