<x-layout>
    <x-slot:title>Kontak Perusahaan</x-slot:title>
    <x-slot:titles>Kontak Perusahaan</x-slot:titles>


    <div class="min-h-full">
        <div class="min-h-full">
            <main>
                <section class="relative py-6 bg-blueGray-50">
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
                                                        <form action="#">
                                                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                                <div class="sm:col-span-2">
                                                                    <label for="name"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                                        Perusahaan</label>
                                                                    <input type="text" name="name" id="name"
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
                                                                    <textarea id="deskripsi" rows="5"
                                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                        placeholder="Write a description...">{{ $profil->deskripsiPerusahaan }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center space-x-4">
                                                                <button type="submit"
                                                                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                                    Update profil
                                                                </button>
                                                                {{-- <button type="button"
                                                                    class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                                    <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor"
                                                                        viewBox="0 0 20 20"
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
                    <div class="w-full mb-4 px-2">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded   bg-blue-800 text-black">
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
                                        class="text-xs text-white uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 bg-blue-800 text-white">
                                                No
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-blue-800 text-white">
                                                Nama
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-blue-800 text-white">
                                                Nomer telp
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-blue-800 text-white">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-blue-800 text-white">
                                                Proses
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kontaks as $data)
                                            <tr class="border-b dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-3 bg-blue-500 font-medium whitespace-nowrap ">
                                                    {{ $loop->iteration }}
                                                </th>
                                                <td class="px-6 py-3 bg-blue-500">{{ $data->nama }}</td>
                                                <td class="px-6 py-3 bg-blue-500">{{ $data->nomor }}</td>
                                                <td class="px-6 py-3 bg-blue-500">{{ $data->email }}</td>
                                                <td class="px-6 py-3 bg-blue-500">
                                                    <form action="#" method="POST">
                                                        {{-- @csrf
                                            @method('delete') --}}
                                                        {{-- <a href="" type="button"
                                                                class="text-white  bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                                Edit
                                                            </a> --}}
                                                        <button id="updateProductButton"
                                                            data-modal-target="updateKontakModal"
                                                            data-modal-toggle="updateKontakModal"
                                                            class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                            type="button">
                                                            Update Kontak
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!-- Main modal -->
                                <div id="updateKontakModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                            <!-- Modal header -->
                                            <div
                                                class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Update Product
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="updateKontakModal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <form action="#">
                                                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                    <div>
                                                        <label for="name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                        <input type="text" name="name" id="name"
                                                            value="iPad Air Gen 5th Wi-Fi"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="Ex. Apple iMac 27&ldquo;">
                                                    </div>
                                                    <div>
                                                        <label for="brand"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                                        <input type="text" name="brand" id="brand"
                                                            value="Google"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="Ex. Apple">
                                                    </div>
                                                    <div>
                                                        <label for="price"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                        <input type="number" value="399" name="price"
                                                            id="price"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="$299">
                                                    </div>
                                                    <div>
                                                        <label for="category"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                                        <select id="category"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                            <option selected="">Electronics</option>
                                                            <option value="TV">TV/Monitors</option>
                                                            <option value="PC">PC</option>
                                                            <option value="GA">Gaming/Console</option>
                                                            <option value="PH">Phones</option>
                                                        </select>
                                                    </div>
                                                    <div class="sm:col-span-2">
                                                        <label for="description"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                                        <textarea id="description" rows="5"
                                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="Write a description...">Standard glass, 3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US</textarea>
                                                    </div>
                                                </div>
                                                <div class="flex items-center space-x-4">
                                                    <button type="submit"
                                                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                        Update product
                                                    </button>
                                                    <button type="button"
                                                        class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                        <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</x-layout>
