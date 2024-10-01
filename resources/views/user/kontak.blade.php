<x-layout>
    <x-slot:title>Kontak Perusahaan</x-slot:title>
    <x-slot:titles>Kontak Perusahaan</x-slot:titles>


    <div class="min-h-full">
        <div class="min-h-full">
            <main>
                <section class="relative py-6-50">
                    <div class="w-full mb-12 px-2">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded   bg-gray-800 text-white">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
                                        <h3 class="font-semibold text-lg text-white">Tabel Profil</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto ">
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-800 text-white border-gray-700">
                                                Nama Perusahaan</th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left  bg-gray-800 text-white border-gray-700">
                                                Alamat Toko</th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left  bg-gray-800 text-white border-gray-700">
                                                Alamat Gudang</th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left  bg-gray-800 text-white border-gray-700">
                                                Deskripsi</th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left  bg-gray-800 text-white border-gray-700">
                                                Proses</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($profilP as $profil)
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 bg-gray-400 text-white border-gray-700">
                                                    {{ $profil->namaPerusahaan }}

                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 bg-gray-400 text-white border-gray-700">
                                                    {{ $profil->alamatToko }}</td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 bg-gray-400 text-white border-gray-700">
                                                    {{ $profil->alamatGudang }}
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 bg-gray-400 text-white border-gray-700">
                                                    {{ $profil->deskripsiPerusahaan }}
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 bg-gray-400 text-white border-gray-700">

                                                    <button id="updateProductButton"
                                                        data-modal-target="updateProductModal"
                                                        data-modal-toggle="updateProductModal"
                                                        class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                        type="button">
                                                        Edit Profil
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- Main modal edit profil -->
                                            <div id="updateProductModal" tabindex="-1" aria-hidden="true"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                            <h3
                                                                class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                Update Profil
                                                            </h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                data-modal-toggle="updateProductModal">
                                                                <svg aria-hidden="true" class="w-5 h-5"
                                                                    fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <form action="{{ route('kontaks.updateP', $profil->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                                <div class="sm:col-span-2">
                                                                    <label for="nama_perusahaan"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                                        Perusahaan</label>
                                                                    <input type="text" name="nama_perusahaan"
                                                                        id="nama_perusahaan"
                                                                        value="{{ $profil->namaPerusahaan }}"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <div>
                                                                    <label for="alamatToko"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                                                        Toko</label>
                                                                    <input type="text" name="alamatToko"
                                                                        id="alamatToko"
                                                                        value="{{ $profil->alamatToko }}"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                        placeholder="Ex. Apple">
                                                                </div>
                                                                <div>
                                                                    <label for="alamatGudang"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                                                        Gudang</label>
                                                                    <input type="text"
                                                                        value="{{ $profil->alamatGudang }}"
                                                                        name="alamatGudang" id="alamatGudang"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>

                                                                <div class="sm:col-span-2">
                                                                    <label for="deskripsi"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                                                    <textarea id="deskripsi" name="deskripsi"
                                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $profil->deskripsiPerusahaan }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center space-x-4">
                                                                <button type="submit"
                                                                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                                    Update profil
                                                                </button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-4 px-2">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded   bg-black text-white">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full px-2 max-w-full flex-grow flex-1 ">
                                        <h3 class="font-semibold text-lg text-white">Tabel Kontak</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto ">
                                <table class="w-full text-sm text-left rtl:text-right text-white dark:text-gray-400">
                                    <thead
                                        class="text-xs text-white uppercase bg-black dark:bg-gray-700 dark:text-gray-400 border-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3  text-white">
                                                No
                                            </th>
                                            <th scope="col" class="px-6 py-3  text-white">
                                                Nama
                                            </th>
                                            <th scope="col" class="px-6 py-3  text-white">
                                                Nomer telp
                                            </th>
                                            <th scope="col" class="px-6 py-3  text-white">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3  text-white">
                                                Proses
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kontaks as $data)
                                            <tr class="border-b dark:border-gray-700 bg-gray-700">
                                                <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap ">
                                                    {{ $loop->iteration }}
                                                </th>
                                                <td class="px-6 py-3">{{ $data->nama }}</td>
                                                <td class="px-6 py-3">{{ $data->nomor }}</td>
                                                <td class="px-6 py-3">{{ $data->email }}</td>
                                                <td class="px-6 py-3">
                                                    <button id="updateProductButton"
                                                        data-modal-target="updateKontakModal{{ $data->id }}"
                                                        data-modal-toggle="updateKontakModal{{ $data->id }}"
                                                        class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                        type="button">
                                                        Update Kontak
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- Main modal edit kontak -->
                                            <div id="updateKontakModal{{ $data->id }}" tabindex="-1"
                                                aria-hidden="true"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                            <h3
                                                                class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                Update Product
                                                            </h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                data-modal-toggle="updateKontakModal{{ $data->id }}">
                                                                <svg aria-hidden="true" class="w-5 h-5"
                                                                    fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <form action="{{ route('kontaks.updateKontak', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                                <div>
                                                                    <label for="nama"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                                                    <input type="text" name="nama"
                                                                        id="nama" value="{{ $data->nama }}"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <div>
                                                                    <label for="nomor"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor</label>
                                                                    <input type="text" name="nomor"
                                                                        id="nomor" value="{{ $data->nomor }}"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <div>
                                                                    <label for="email"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                                    <input type="text" value="{{ $data->email }}"
                                                                        name="email" id="email"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>


                                                            </div>
                                                            <div class="flex items-center space-x-4">
                                                                <button type="submit"
                                                                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                                    Update Kontak
                                                                </button>
                                                                {{-- <button type="button"
                                                                    class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                                    <svg class="mr-1 -ml-1 w-5 h-5"
                                                                        fill="currentColor" viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                    Delete
                                                                </button> --}}
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</x-layout>
