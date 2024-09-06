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
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900"></h1>
                </div>
            </header>


            <main>
                <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
                    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                        <div class="mx-auto max-w-5xl">

                            <div class="my-8 xl:mb-16 xl:mt-12">
                                <img class="w-full dark:hidden"
                                    src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-showcase.svg"
                                    alt="" />
                                <img class="hidden w-full dark:block"
                                    src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-showcase-dark.svg"
                                    alt="" />
                            </div>

                            <div class="mx-auto mb-6 max-w-3xl space-y-6 md:mb-12">
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Connectivity includes
                                    two
                                    Thunderbolt / USB 4 ports and two USB 3 ports (all with a USB-C connector), a 3.5 mm
                                    headphone
                                    jack conveniently mounted on the left edge of the display, Wi-Fi 6 (802.11ax), and
                                    Bluetooth
                                    5.0.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus iste porro ullam
                                    laboriosam,
                                    consectetur tempora debitis laudantium! Nobis exercitationem ea alias obcaecati
                                    eveniet nostrum
                                    voluptatibus, ut quaerat quibusdam officia nam.
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem laboriosam sit
                                    voluptatem
                                    expedita? Repellendus perferendis nihil suscipit distinctio temporibus sapiente,
                                    delectus hic
                                    pariatur nesciunt necessitatibus ut veniam quam quis magnam!</p>

                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">A-Grade/CR: iMacs are
                                    in 9/10
                                    Cosmetic Condition and are 100% Fully Functional. iMacs will be shipped in generic
                                    packaging and
                                    will contain generic accessories. 90 Days Seller Warranty Included. iMacs may show
                                    signs of wear
                                    like scratches, scuffs and minor dents.
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam eius vel accusantium
                                    tempore
                                    dignissimos assumenda. Natus, numquam ullam? Inventore, atque! Rem ad laudantium
                                    veniam a hic?
                                    Non autem beatae iste?
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa voluptas expedita
                                    voluptatem esse
                                    totam autem beatae, est consequuntur itaque amet similique. Ad culpa sapiente ut sed
                                    autem quos
                                    quaerat! Dolorem?</p>
                            </div>

                        </div>
                    </div>
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
