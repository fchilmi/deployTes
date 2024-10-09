<x-layout>
    <x-slot:title>Data Produk</x-slot:title>
    <x-slot:titles class="mb-4">Data Produk</x-slot:titles>

    <div class="min-h-full">
        <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
            <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                    {{-- <img class="w-full dark:hidden" src="/img/{{ $produk->namaGambar }}" alt="" /> --}}

                    {{-- CAROUSEL --}}
                    <div id="controls-carousel" class="relative w-full z-0" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <!-- Item 1 -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            @foreach ($produk->gambar as $gambar)
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="/uploads/{{ $gambar->namaGambar }}"
                                        class="absolute block w-full bg-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full bg-transparent"
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
                        @if ($kontaks->count() > 3)
                            <div class="mt-6 sm:gap-2 sm:items-center sm:flex sm:mt-8 max-w-10">
                                @foreach ($kontaks->take(3) as $nomer)
                                    <a href="https://api.whatsapp.com/send?phone={{ $nomer->nomor }}&text=Hello%2C%20Kami%20Dapat%20No%20Anda%20Dari%20{{ $produk->namaProduk }}"
                                        class="text-white mt-4 sm:mt-0 bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2 flex items-center justify-center"
                                        role="button">
                                        <svg class="mr-2 w-[40px] h-[40px] text-gray-800 dark:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                                clip-rule="evenodd" />
                                            <path fill="currentColor"
                                                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                        </svg>
                                        {{ Str::of($nomer->nama)->words(2) }}
                                    </a>
                                @endforeach
                            </div>
                            <div class="mt-6 sm:gap-2 sm:items-center sm:flex sm:mt-8 max-w-10">
                                @foreach ($kontaks->skip(3) as $nomer)
                                    <a href="https://api.whatsapp.com/send?phone={{ $nomer->nomor }}&text=Hello%2C%20Kami%20Dapat%20No%20Anda%20Dari%20{{ $produk->namaProduk }}"
                                        class="text-white mt-4 sm:mt-0 bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2 flex items-center justify-center"
                                        role="button">
                                        <svg class="mr-2 w-[38px] h-[38px] text-gray-800 dark:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                                clip-rule="evenodd" />
                                            <path fill="currentColor"
                                                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                        </svg>
                                        {{ Str::of($nomer->nama)->words(2) }}
                                    </a>
                                @endforeach
                            </div>
                        @endif

                        <hr class="my-4 md:my-8 border-gray-300 dark:border-gray-200" />

                        <p class="mb-6 text-gray-500 dark:text-gray-400">
                            {!! nl2br(e($produk->deskripsiProduk)) !!}
                        </p>
                        {{-- <p>
                                {{ Str::of($produk->deskripsiProduk)->newLine()->append($produk->deskripsiProduk) }}
                            </p> --}}
                    </div>
                </div>
            </div>
            <hr class="border-gray-400 mt-10" />
            <div class="grid grid-cols-4 gap-4 mt-10">
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
        </section>
    </div>
</x-layout>
