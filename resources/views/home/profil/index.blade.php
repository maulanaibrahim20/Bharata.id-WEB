<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Bharata.id || Dashboard</title>
</head>

<body>
    @include('components.navbar')

    <div class="container mx-auto p-3">
        <div
            class="w-full max-w-m p-4 bg-white border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
            <h1 class="text-lg font-normal font-semibold">My Profile</h1>
            <p class="text-sm font-normal text-gray-500">Kelola informasi profil Anda untuk mengontrol, melindungi
                dan mengamankan akun</p>
            <hr class="my-2 border-t border-gray-200 dark:border-gray-600">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div class="flex justify-center">
                    <div>
                        <label for="profile-picture" class="block mb-2">
                            <img src="https://flowbite.com/docs/images/carousel/carousel-5.svg"
                                class="rounded-full w-32 h-32 mx-auto mb-2" alt="poto profil...">
                        </label>
                        <input type="file" id="profile-picture"
                            class="text-sm text-white dark:text-white p-1 rounded bg-gray-500 hover:bg-blue-300" />
                        <div class="mt-2">
                            <p class="text-xs text-gray-500 text-center">Ukuran gambar: maks. 1 MB</p>
                            <p class="text-xs text-gray-500 text-center">Format gambar: .JPEG, .PNG</p>
                        </div>
                    </div>
                </div>
                <div class="py-1">
                    <div class="flex">
                        <label for="username"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Username:
                        </label>
                        <input
                            id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            disabled placeholder="{{ Auth::user()->name }}" />
                    </div>
                    <div class="flex mt-4"> <!-- Tambahkan mt-4 untuk memberi jarak antar baris -->
                        <label for="email"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Email:
                        </label>
                        <input
                            id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            disabled placeholder="{{ Auth::user()->email }}" />
                    </div>
                    <div class="flex mt-4"> <!-- Tambahkan mt-4 untuk memberi jarak antar baris -->
                        <label for="telepon"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Telepon:
                        </label>
                        <input
                            id="telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nomer Telepon anda..." />
                    </div>
                    <div class="flex mt-4"> <!-- Tambahkan mt-4 untuk memberi jarak antar baris -->
                        <label for="toko"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Nama Toko:
                        </label>
                        <input
                            id="toko" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama toko anda..." />
                    </div>
                    <div class="flex mt-4"> <!-- Tambahkan mt-4 untuk memberi jarak antar baris -->
                        <label for="kelamin"
                            id="kelamin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Jenis Kelamin:
                        </label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            <div class="ml-2 flex items-center space-x-2">
                                <input type="radio" id="male" name="gender" value="male"
                                    class="form-radio h-4 w-4 text-blue-500">
                                <label for="male">Laki-laki</label>
                            </div>
                            <div class="ml-5 flex items-center space-x-2">
                                <input type="radio" id="female" name="gender" value="female"
                                    class="form-radio h-4 w-4 text-pink-500">
                                <label for="female">Perempuan</label>
                            </div>
                            <div class="ml-2 flex items-center space-x-2">
                                <input type="radio" id="other" name="gender" value="other"
                                    class="form-radio h-4 w-4 text-gray-500">
                                <label for="other">Lainnya</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="flex space-x-4">
                            <label for="date"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                Tanggal:
                            </label>
                            <div>
                                <input type="number" class="w-full px-4 py-2 border rounded-md" placeholder="DD"
                                    min="1" max="31">
                            </div>
                            <div>
                                <input type="number" class="w-full px-4 py-2 border rounded-md" placeholder="MM"
                                    min="1" max="12">
                            </div>
                            <div>
                                <input type="number" class="w-full px-4 py-2 border rounded-md" placeholder="YYYY"
                                    min="1900" max="2100">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit"
                            class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FOOTER --}}
    @include('components.footer')
    {{-- END FOOTER --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
