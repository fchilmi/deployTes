<!DOCTYPE html class="h-full bg-gray-100">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title> Data Produk</title>
</head>

<body class="h-full">

    <div class="min-h-full">
        <div class="min-h-full">
            <nav class="bg-gray-800" x-data="{ isOpen: false }">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                    alt="Your Company">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    {{-- <x-nav-link href='#' :active="request()->is('/')">Nama Perusahaan</x-nav-link> --}}
                                    {{-- <x-nav-link href='/posts' :active="request()->is('posts')">Blog</x-nav-link> --}}
                                    <x-nav-link href='/user/dashboard' :active="request()->is('user/dashboard')">Produk</x-nav-link>
                                    <x-nav-link href='/user/profilperusahaan' :active="request()->is('user/profilperusahaan')">Profil
                                        Perusahaan</x-nav-link>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">


                                <!-- Profile dropdown -->
                                <div class="relative ml-3">
                                    <div>
                                        <button type="button" @click="isOpen = !isOpen"
                                            class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="absolute -inset-1.5"></span>
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </button>
                                    </div>

                                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75 transform"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95"
                                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <!-- Active: "bg-gray-100", Not Active: "" -->
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-1">Settings</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-2">Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-mr-2 flex md:hidden">
                            <!-- Mobile menu button -->
                            <button type="button" @click="isOpen = !isOpen"
                                class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>
                                <!-- Menu open: "hidden", Menu closed: "block" -->
                                <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                                <!-- Menu open: "block", Menu closed: "hidden" -->
                                <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                    {{-- <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-nav-link href='/' :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href='/posts' :active="request()->is('posts')">Blog</x-nav-link>
                        <x-nav-link href='/user/dashboard' :active="request()->is('user/dashboard')">Produk</x-nav-link>
                        <x-nav-link href='/user/profilperusahaan' :active="request()->is('user/profilperusahaan')">Profil Perusahaan</x-nav-link>
                    </div> --}}
                    <div class="border-t border-gray-700 pb-3 pt-4">
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                            </div>

                        </div>
                        <div class="mt-3 space-y-1 px-2">
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                                Profile</a>
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                                out</a>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Data Produk</h1>
                </div>
            </header>


            <main>
                <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
                    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                        <!-- Heading & Filters -->

                        <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                            <div>

                                <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">
                                </h2>
                            </div>
                            <div class="flex items-center space-x-4">
                                <button data-modal-toggle="filterModal" data-modal-target="filterModal"
                                    type="button"
                                    class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                                    <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                            d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                                    </svg>
                                    Filters
                                    <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 9-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
                            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                                @forelse($posts as $post)
                                    <div
                                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                                        <div class="h-56 w-full">
                                            <a href="#">
                                                <img class="mx-auto h-full dark:hidden"
                                                    src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                                    alt="" />
                                                <img class="mx-auto hidden h-full dark:block"
                                                    src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="pt-6">
                                            <div class="mb-4 flex items-center justify-between gap-4">
                                            </div>

                                            <a href="#"
                                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">
                                                {{ $post->title }}</a>

                                            <div class="my-8 flex items-center justify-between gap-4">
                                                <p
                                                    class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">
                                                </p>
                                                <a href="/user/detail"
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
                        {{ $posts->links() }}
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
                                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="px-4 md:px-5">
                                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                        <ul class="-mb-px flex flex-wrap text-center text-sm font-medium"
                                            id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                            <li class="mr-1" role="presentation">
                                                <button class="inline-block pb-2 pr-1" id="brand-tab"
                                                    data-tabs-target="#brand" type="button" role="tab"
                                                    aria-controls="profile" aria-selected="false">Brand</button>
                                            </li>
                                            {{-- <li class="mr-1" role="presentation">
                                                <button
                                                    class="inline-block px-2 pb-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                                                    id="advanced-filers-tab" data-tabs-target="#advanced-filters" type="button"
                                                    role="tab" aria-controls="advanced-filters"
                                                    aria-selected="false">Advanced Filters</button>
                                            </li> --}}
                                        </ul>
                                    </div>
                                    <div id="myTabContent">
                                        <div class="grid grid-cols-2 gap-4 md:grid-cols-3" id="brand"
                                            role="tabpanel" aria-labelledby="brand-tab">
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

                                                <div class="flex items-center">
                                                    <input id="allview" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="allview"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Allview
                                                        (45) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="atari" type="checkbox" value="" checked
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="asus"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Atari
                                                        (176) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="amd" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="amd"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        AMD
                                                        (49) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="aruba" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="aruba"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Aruba
                                                        (16) </label>
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

                                                <div class="flex items-center">
                                                    <input id="benq" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="benq"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        BenQ
                                                        (45) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="bosch" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="bosch"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Bosch
                                                        (176) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="brother" type="checkbox" value="" checked
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="brother"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Brother
                                                        (176) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="biostar" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="biostar"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Biostar
                                                        (49) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="braun" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="braun"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Braun
                                                        (16) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="blaupunkt" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="blaupunkt"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Blaupunkt (45) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="benq2" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="benq2"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        BenQ
                                                        (23) </label>
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

                                                <div class="flex items-center">
                                                    <input id="clevo" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="clevo"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Clevo
                                                        (45) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="corsair" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="corsair"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Corsair
                                                        (15) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="csl" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="csl"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Canon
                                                        (49) </label>
                                                </div>
                                            </div>

                                            <div class="space-y-2">
                                                <h5 class="text-lg font-medium uppercase text-black dark:text-white">D
                                                </h5>

                                                <div class="flex items-center">
                                                    <input id="dell" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="dell"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Dell
                                                        (56) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="dogfish" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="dogfish"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Dogfish
                                                        (24) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="dyson" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="dyson"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Dyson
                                                        (234) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="dobe" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="dobe"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Dobe
                                                        (5) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="digitus" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="digitus"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Digitus
                                                        (1) </label>
                                                </div>
                                            </div>

                                            <div class="space-y-2">
                                                <h5 class="text-lg font-medium uppercase text-black dark:text-white">E
                                                </h5>

                                                <div class="flex items-center">
                                                    <input id="emetec" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="emetec"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Emetec
                                                        (56) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="extreme" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="extreme"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Extreme
                                                        (10) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="elgato" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="elgato"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Elgato
                                                        (234) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="emerson" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="emerson"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Emerson
                                                        (45) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="emi" type="checkbox" value="" checked
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="emi"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        EMI
                                                        (176) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="fugoo" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="fugoo"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Fugoo
                                                        (49) </label>
                                                </div>
                                            </div>

                                            <div class="space-y-2">
                                                <h5 class="text-lg font-medium uppercase text-black dark:text-white">F
                                                </h5>

                                                <div class="flex items-center">
                                                    <input id="fujitsu" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="fujitsu"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Fujitsu
                                                        (97) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="fitbit" type="checkbox" value="" checked
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="fitbit"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Fitbit
                                                        (56) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="foxconn" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="foxconn"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Foxconn
                                                        (234) </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="floston" type="checkbox" value=""
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                                    <label for="floston"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                        Floston
                                                        (45) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <!-- Modal footer -->
                                <div class="flex items-center space-x-4 rounded-b p-4 dark:border-gray-600 md:p-5">
                                    <button type="submit"
                                        class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-700 dark:hover:bg-primary-800 dark:focus:ring-primary-800">simpan</button>
                                    {{-- <button type="reset"
                                        class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Reset</button> --}}
                                </div>
                            </div>
                        </div>
                    </form>

                </section>

                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

            </main>

        </div>
    </div>
    <footer class="bg-gray-700 antialiased dark:bg-gray-800">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-2">
            <article class="p-6 ">

                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-400 dark:text-white">
                    Alamat Perusahaan</h2>

                <p class="mb-5 font-light text-gray-300 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Consequuntur doloribus praesentium accusantium, officia consequatur id dolorum
                    totam dolor temporibus beatae aliquam culpa vel perspiciatis pariatur magni incidunt rem iste nemo!
                </p>

            </article>
            <article class="p-6">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-400 dark:text-white">
                    Nama Perusahaan</h2>

                <p class="mb-5 font-light text-gray-300 dark:text-gray-400">Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Temporibus perspiciatis provident minima? Iusto pariatur fuga, sed ex earum
                    doloremque, tenetur vitae architecto alias itaque dicta laboriosam voluptates soluta nostrum
                    exercitationem.</p>

            </article>
        </div>

    </footer>
</body>

</html>
