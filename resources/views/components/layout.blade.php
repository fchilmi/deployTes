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
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <title> {{ $titles }}</title>
</head>

<body class="h-full">

    <div class="min-h-full">
        <x-navbar></x-navbar>
        @if (request()->routeIs('profilPerusahaan'))
        <header class="bg-white shadow">
            <div class="flex h-16 items-center justify-between mx-auto max-w-7xl px-4 py-2 mt-16 sm:px-6 lg:px-8">
                <div class="flex items-center">
                    <div class="flex items-baseline">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Profil Perusahaan</h1>
                    </div>
                </div>
                <div class="flex item-center">
                <div class="ml-4 flex items-center">
                    <a href="{{ route('editProfil') }}" type="button" class="text-white bg-blue-800 hover:text-gray-700 border border-blue-700 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit Profil</a>
                </div>
                </div>
            </div>
        </header>
        @else
        <x-header>{{ $title }}</x-header> @endif

        <main>
            <div class="mx-auto
        max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
    {{ $slot }}
    </div>
    </main>
    <x-footer></x-footer>
    </div>

    </body>

</html>
