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
                                        <img src="/uploads/{{ $gambar->namaGambar }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
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
                                @foreach ($kontaks as $nomer)
                                    <a href="https://api.whatsapp.com/send?phone={{ $nomer->nomor }}&text=Hello%2C%20Kami%20Dapat%20No%20Anda%20Dari%20{{ $produk->namaProduk }}"
                                        title=""
                                        class="text-white mt-4 sm:mt-0 bg-green-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center"
                                        role="button">
                                        {{ Str::of($nomer->nama)->words(2) }}
                                    </a>
                                @endforeach
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
            <div class="grid grid-cols-4 gap-4 mt-20">
                @foreach ($produkKategori as $pk)
                    <div
                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="h-56 w-full">
                            <a href="#">
                                <img class="mx-auto h-full dark:hidden" src="/uploads/{{ $pk->namaGambar }}"
                                    alt="" />
                                {{-- <img class="mx-auto hidden h-full dark:block"
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg"
                                        alt="" /> --}}
                            </a>
                        </div>
                        <div class="pt-6">
                            <div class="mb-4 flex items-center justify-between gap-4">
                            </div>

                            <a href=""
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">
                                {{ $pk->namaProduk }}</a>

                            <div class="my-8 flex items-center justify-between gap-4">
                                <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">
                                </p>
                                <a href="/user/detail/{{ $pk->slug }}"
                                    class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                </div> --}}
            </div>
        </main>
    </div>
</x-layout>
