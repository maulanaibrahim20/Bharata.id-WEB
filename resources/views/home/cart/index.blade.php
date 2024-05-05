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

    <div class="container p-3 mx-auto">
        <p class="font-normal font-semibold text-2xl">Keranjang</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div>
                <div
                    class="mt-3 w-full max-w-m p-4 bg-white border rounded-t-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Checkbox "Pilih Semua" -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" />
                            <span class="ml-2 text-sm">Pilih Semua</span>
                        </label>
                        <button type="button" class="text-red-600 hover:text-red-800">Hapus</button>
                    </div>
                </div>
                <div
                    class="mt-1 w-full max-w-m p-4 bg-white border rounded-b-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Checkbox "Pilih Semua" -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" />
                            <img src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" class="w-20 h-20 ml-2 rounded" alt="produk"/>
                        </label>
                    </div>
                </div>
            </div>
            <div
                class="mt-3 w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">

            </div>
        </div>
    </div>

    {{-- FOOTER --}}
    @include('components.footer')
    {{-- END FOOTER --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
