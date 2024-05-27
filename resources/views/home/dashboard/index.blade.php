<div class="container mx-auto p-3">
    {{-- CAROUSEL --}}

    <div id="default-carousel" class="relative w-90" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative z-10 h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-4.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-5.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    {{-- END CAROUSEL --}}

    {{-- KATEGORI --}}
    <div class="flex justify-between mt-4">
        <div>
            <h4 class="text-lg font-semibold font-normal">Kategori</h4>
        </div>
        <div class="text-right">
            <a href="#" class="text-sm font-normal">Kategori Lainnya <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
    {{-- CARD KATEGORI --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-4">
        <a href=""
            class="w-full p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 text-center">
            <p class="text-lg font-normal font-semibold"><i class="bi bi-car-front"></i> Kendaraan</p>
        </a>
        <a href=""
            class="w-full p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 text-center">
            <p class="text-lg font-normal font-semibold"><i class="bi bi-houses"></i> Kamar Kost</p>
        </a>
        <a href=""
            class="w-full p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 text-center">
            <p class="text-lg font-normal font-semibold"><i class="bi bi-bicycle"></i> Olahraga</p>
        </a>
    </div>
    {{-- END CARD KATEGORI --}}
    {{-- END KATEGORI --}}
    {{-- PRODUK --}}
    <div class="flex justify-between mt-4">
        <div>
            <h4 class="text-lg font-semibold font-normal">Rekomendasi</h4>
        </div>
        <div class="text-right">
            <a href="#" class="text-sm font-normal">Kategori Lainnya <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
    {{-- CARD PRODUK --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
        <a href="{{ url('home/produk') }}"
            class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                class="h-auto max-w-full rounded-lg" />
            <p class="font-normal font-semibold">Toyota Raize</p>
            <p class="text-sm font-normal">Kedai Kita</p>
            <p class="text-lg font-normal  font-semibold">Rp 550.000 <span class="text-sm text-gray-500">/hari</span>
            </p>
            <p class="text-sm font-normal text-gray-500">Indramayu</p>
            <p class="text-sm font-normal text-gray-500" style="font-size: 10px">4.7 | 255+ rental</p>
        </a>
        <a href="{{ url('home/produk') }}"
            class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                class="h-auto max-w-full rounded-lg" />
            <p class="font-normal font-semibold">Toyota Raize</p>
            <p class="text-sm font-normal">Kedai Kita</p>
            <p class="text-lg font-normal  font-semibold">Rp 550.000 <span class="text-sm text-gray-500">/hari</span>
            </p>
            <p class="text-sm font-normal text-gray-500">Indramayu</p>
            <p class="text-sm font-normal text-gray-500" style="font-size: 10px">4.7 | 255+ rental</p>
        </a>
        <a href="{{ url('home/produk') }}"
            class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                class="h-auto max-w-full rounded-lg" />
            <p class="font-normal font-semibold">Toyota Raize</p>
            <p class="text-sm font-normal">Kedai Kita</p>
            <p class="text-lg font-normal  font-semibold">Rp 550.000 <span class="text-sm text-gray-500">/hari</span>
            </p>
            <p class="text-sm font-normal text-gray-500">Indramayu</p>
            <p class="text-sm font-normal text-gray-500" style="font-size: 10px">4.7 | 255+ rental</p>
        </a>
        <a href="{{ url('home/produk') }}"
            class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                class="h-auto max-w-full rounded-lg" />
            <p class="font-normal font-semibold">Toyota Raize</p>
            <p class="text-sm font-normal">Kedai Kita</p>
            <p class="text-lg font-normal  font-semibold">Rp 550.000 <span class="text-sm text-gray-500">/hari</span>
            </p>
            <p class="text-sm font-normal text-gray-500">Indramayu</p>
            <p class="text-sm font-normal text-gray-500" style="font-size: 10px">4.7 | 255+ rental</p>
        </a>
    </div>
    {{-- END CARD PRODUK --}}
    {{-- END PRODUK --}}
</div>
