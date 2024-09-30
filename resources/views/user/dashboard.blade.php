<x-layout>
    <x-slot:title>Data Produk</x-slot:title>
    <x-slot:titles class="mb-4">Data Produk</x-slot:titles>

    <section class="bg-gray-50 antialiased dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->

            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>
                </div>
                <div class="flex items-left space-x-4">
                    <button data-modal-toggle="filterModal" data-modal-target="filterModal" type="button"
                        class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                        <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                        </svg>
                        Filters
                        <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-4 mx-auto max-w-screen-xl lg:px-0">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @forelse($produks as $produk)
                        <div
                            class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                            <div class="h-56 w-full">
                                <a href="#">
                                    <img class="mx-auto h-full dark:hidden" src="/uploads/{{ $produk->namaGambar }}"
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
                                    {{ $produk->namaProduk }}</a>

                                <div class="my-8 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">
                                    </p>
                                    <a href="/user/detail/{{ $produk->slug }}"
                                        class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div>
                            <p class="font-semibold text-xl my-4">Artikel tidak ditemukan</p>
                            <a href="/posts" class="text-blue-600 hover:underline">&laquo; Back to all
                                posts</a>
                        </div>
                    @endforelse
                </div>
            </div>
            {{-- {{ $posts->links() }} --}}
        </div>
        <!-- Filter modal -->
        <form action="#" method="get" id="filterModal" tabindex="-1" aria-hidden="true"
            class="fixed left-0 right-0 top-0 z-50 hidden h-modal w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
            <div class="relative h-full w-full max-w-xl md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between rounded-t p-4 md:p-5">
                        <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">Filters</h3>
                        <button type="button"
                            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="filterModal">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body Filter-->
                    <div class="px-4 md:px-5">
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="-mb-px flex flex-wrap text-center text-sm font-medium" id="myTab"
                                data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-1" role="presentation">
                                    <button class="inline-block pb-2 pr-1" id="brand-tab" data-tabs-target="#brand"
                                        type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Brand</button>
                                </li>
                            </ul>
                        </div>
                        <div id="myTabContent">
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3" id="brand" role="tabpanel"
                                aria-labelledby="brand-tab">
                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium uppercase text-black dark:text-white">A
                                    </h5>

                                    <div class="flex items-center">
                                        <input id="apple" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="apple"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Apple
                                            (56) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="asus" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="asus"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Asus
                                            (97) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="acer" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="acer"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Acer
                                            (234) </label>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium uppercase text-black dark:text-white">B
                                    </h5>

                                    <div class="flex items-center">
                                        <input id="beats" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="beats"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Beats
                                            (56) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="bose" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="bose"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Bose
                                            (97) </label>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium uppercase text-black dark:text-white">C
                                    </h5>

                                    <div class="flex items-center">
                                        <input id="canon" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="canon"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Canon
                                            (49) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="cisco" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="cisco"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Cisco
                                            (97) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="cowon" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="cowon"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Cowon
                                            (234) </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Modal footer -->
                    <div class="flex items-center space-x-4 rounded-b p-4 dark:border-gray-600 md:p-5">
                        <button type="submit"
                            class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-700 dark:hover:bg-primary-800 dark:focus:ring-primary-800">simpan</button>
                        <button type="reset"
                            class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</x-layout>
