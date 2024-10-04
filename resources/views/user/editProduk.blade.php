<x-layout>
    <x-slot:title>Edit Produk</x-slot:title>
    <x-slot:titles>Edit Produk</x-slot:titles>
    <main>
        <div class="grid grif-cols-1 gap-8 md:grid-cols-1 lg:grid-cols-1">
            <div class="py-8 px-4 h-auto max-w-full lg:py-1 rounded-lg bg-gray-500">
                <form action="{{ route('produkUpdate', $hasilProduk->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Produk</label>
                            <input type="text" name="produkName" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type product name" required="" value="{{ $hasilProduk->namaProduk }}">
                        </div>

                        <div>
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                            <input type="number" name="produkPrice" id="price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="" value="{{ $hasilProduk->hargaProduk }}">
                        </div>
                        <div>
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kategori</label>
                            <select id="category" name="produkKategori"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="{{ $hasilProduk->category->id }}">
                                    {{ $hasilProduk->category->name }}
                                </option>
                                <option value="1">Filter Kolam</option>
                                <option value="2">Filter Tanki</option>
                                <option value="3">Filter Cooling</option>
                                <option value="4">Spare Part</option>
                            </select>
                        </div>
                        @foreach ($hasilGambar as $hg)
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="multiple_files">Gambar</label>
                                <img src="/uploads/{{ $hg->namaGambar }}" alt="" width="50%" height="30%">
                            </div>
                            <div class="mt-20">
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="files" type="file" name="namaGambar">
                            </div>
                        @endforeach
                        <div class="sm:col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <textarea id="description" name="produkDeskripsi" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="tulis produk deskripsi disini">{{ $hasilProduk->deskripsiProduk }}</textarea>
                        </div>

                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit"
                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Update Produk
                        </button>
                    </div>
                </form>
            </div>
            {{-- <div class="py-8 px-4 h-auto max-w-full lg:py-1 rounded-lg bg-gray-600">
                <form action="{{ route('updateGambar', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div class="">
                            <label for="alamatToko"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar 1</label>
                            <img src="/uploads/{{ $produk->GambarPerusahaan1 }}" alt="" width="50%">
                        </div>
                        <div>
                            <input
                                class="block -ml-20 mt-12 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="files1" type="file" name="files1">
                        </div>
                        <div class="">
                            <label for="alamatToko"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar 2</label>
                            @if ($produk->GambarPerusahaan2 == null)
                                <svg class="ml-8 w-[70px] h-[70px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1"
                                        d="m6 6 12 12m3-6a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            @else
                                <img src="/uploads/{{ $profil->GambarPerusahaan2 }}" alt="gambar2" width="50%">
                            @endif
                        </div>
                        <div>
                            <input
                                class="block -ml-20 mt-12 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="files2" type="file" name="files2">
                        </div>
                        <div class="">
                            <label for="alamatToko"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar 3</label>
                            @if ($profil->GambarPerusahaan2 == null)
                                <svg class="ml-8 w-[70px] h-[70px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1"
                                        d="m6 6 12 12m3-6a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            @else
                                <img src="/uploads/{{ $profil->GambarPerusahaan2 }}" alt="gambar2" width="50%">
                            @endif
                        </div>
                        <div>
                            <input
                                class="block -ml-20 mt-12 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="files3" type="file" name="files3">
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button
                            type="submit"class="text-white bg-blue-800 hover:text-gray-700 border border-blue-700 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Update Profil
                        </button>
                    </div>
                </form>
            </div> --}}
        </div>
    </main>
</x-layout>
