<x-layout>
    <x-slot:title>Data Produk</x-slot:title>
    <x-slot:titles class="mb-4">Data Produk</x-slot:titles>

    <div class="min-h-full">
        <main>
            <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
                <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                        {{-- <img class="w-full dark:hidden" src="/img/{{ $produk->namaGambar }}" alt="" /> --}}

                        {{-- CAROUSEL --}}
                        <div id="controls-carousel" class="relative w-full border-2" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <!-- Item 1 -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                @foreach ($produk->gambar as $gambar)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/img/{{ $gambar->namaGambar }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="{{ $gambar->namaGambar }}">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-600/20 dark:bg-gray-800/30 group-hover:bg-gray-600/20 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-600/30 dark:bg-gray-800/30 group-hover:bg-gray-600/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>


                        <div class="mt-6 sm:mt-8 lg:mt-0">
                            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                                {{ $produk->namaProduk }}
                            </h1>
                            <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                                <p class="text-2xl font-extrabold text-gray-900 sm:text-xl dark:text-white">
                                    {{ $produk->created_at->diffForHumans() }}</p> | Min Pembelian >1
                                </p>

                            </div>
                            <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                                <a href="#" title=""
                                    class="text-white mt-4 sm:mt-0 bg-green-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center"
                                    role="button">
                                    Chat Whatsapp
                                </a>
                            </div>

                            <hr class="my-4 md:my-8 border-gray-200 dark:border-gray-800" />

                            <p class="mb-6 text-gray-500 dark:text-gray-400">
                                {{ $produk->deskripsiProduk }}
                            </p>
                            <p>
                                {{ Str::of($produk->deskripsiProduk)->newLine()->append($produk->deskripsiProduk) }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-layout>
