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
                                name="start_date" placeholder="Masukkan Tanggal Mulai Kost" required>
                        </div>
                    </div>

                    <!-- Fasilitas -->
                    <div id="facility-section">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fasilitas</label>
                        <div class="grid grid-cols-2 gap-2" id="facility-container">
                            <div>
                                <select name="facilities[0][type]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">-- Pilih Type Fasilitas --</option>
                                    <option value="Fasilitas Umum">Fasilitas Umum</option>
                                    <option value="Fasilitas Parkir">Fasilitas Parkir</option>
                                    <option value="Fasilitas Kamar Mandi">Fasilitas Kamar Mandi</option>
                                </select>
                            </div>
                            <div>
                                <textarea type="text" name="facilities[0][facility]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Fasilitas"></textarea>
                            </div>
                        </div>
                        <button type="button" class="mt-2 px-3 py-2 bg-blue-500 text-white rounded"
                            onclick="addFacility()">Tambah Fasilitas</button>
                    </div>

                    <!-- Aturan -->
                    <div id="rule-section" class="mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aturan</label>
                        <div class="grid grid-cols-2 gap-2" id="rule-container">
                            <div>
                                <select name="rules[0][type]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">-- Pilih Type Aturan --</option>
                                    <option value="Aturan Umum">Aturan Umum</option>
                                    <option value="Aturan Parkir">Aturan Parkir</option>
                                    <option value="Aturan Kamar Mandi">Aturan Kamar Mandi</option>
                                </select>
                            </div>
                            <div>
                                <textarea type="text" name="rules[0][rule]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Aturan"></textarea>
                            </div>
                        </div>
                        <button type="button" class="mt-2 px-3 py-2 bg-blue-500 text-white rounded"
                            onclick="addRule()">Tambah Aturan</button>
                    </div>

                    <div class="mt-4">
                        <button
                            class="cursor-pointer bg-green-500 dark:bg-green-600 text-gray-200 dark:text-gray-700 px-3 py-2 rounded"
                            type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let facilityIndex = 1;

        function addFacility() {
            const facilityContainer = document.getElementById('facility-container');
            const newFacility = document.createElement('div');
            newFacility.classList.add('grid', 'grid-cols-2', 'gap-2');
            newFacility.innerHTML = `
            <div>
                <select name="facilities[${facilityIndex}][type]" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">-- Pilih Type Fasilitas --</option>
                    <option value="Fasilitas Umum">Fasilitas Umum</option>
                    <option value="Fasilitas Parkir">Fasilitas Parkir</option>
                    <option value="Fasilitas Kamar Mandi">Fasilitas Kamar Mandi</option>
                </select>
            </div>
            <div>
                <textarea type="text" name="facilities[${facilityIndex}][facility]" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fasilitas"></textarea>
            </div>
        `;
            facilityContainer.appendChild(newFacility);
            facilityIndex++;
        }

        let ruleIndex = 1;

        function addRule() {
            const ruleContainer = document.getElementById('rule-container');
            const newRule = document.createElement('div');
            newRule.classList.add('grid', 'grid-cols-2', 'gap-2');
            newRule.innerHTML = `
            <div>
                <select name="rules[${ruleIndex}][type]" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">-- Pilih Type Aturan --</option>
                    <option value="Aturan Umum">Aturan Umum</option>
                    <option value="Aturan Parkir">Aturan Parkir</option>
                    <option value="Aturan Kamar Mandi">Aturan Kamar Mandi</option>
                </select>
            </div>
            <div>
                <textarea type="text" name="rules[${ruleIndex}][rule]" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full px-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aturan"></textarea>
            </div>
        `;
            ruleContainer.appendChild(newRule);
            ruleIndex++;
        }
    </script>
@endsection
