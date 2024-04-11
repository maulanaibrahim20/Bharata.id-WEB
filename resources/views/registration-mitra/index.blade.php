<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Bharata.id || Registration Mitra</title>
</head>

<body>
    {{-- NAVBAR --}}
    @include('components.navbar')
    {{-- END NAVBAR --}}
    {{-- CONTENT --}}
    <div class="container p-3 mx-auto">
        <div
            class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
            <h1 class="text-lg font-normal font-semibold">Registration Mitra</h1>
            <hr class="my-2 border-t border-gray-200 dark:border-gray-600">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <div class="">
                    <div class="flex items-center mb-4">
                        <label for="username" class="mr-2 font-normal">Username:</label>
                        <input type="text" id="username" placeholder="Masukkan Username Anda..."
                            class="flex-grow w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="flex items-center mb-4">
                        <label for="telepon" class="mr-2 font-normal">Telepon:</label>
                        <input type="text" id="telepon" placeholder="Masukkan Telepon Anda..."
                            class="flex-grow w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="flex items-center mb-4">
                        <label for="alamat" class="mr-2 font-normal">Alamat:</label>
                        <input type="text" id="alamat" placeholder="Masukkan Alamat Anda..."
                            class="flex-grow w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END CONTENT --}}
    {{-- FOOTER --}}
    @include('components.footer')
    {{-- END FOOTER --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
