<x-layout>
    <x-slot:titles>Profil Perusahaan</x-slot:titles>

    <div class="min-h-full">
        <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <div class="mx-auto max-w-5xl">

                    <div class="my-8 xl:mb-16 xl:mt-12">
                        <img class="w-full dark:hidden" src="/uploads/{{ $profil->GambarPerusahaan1 }}" alt="" />
                        <img class="hidden w-full dark:block"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-showcase-dark.svg"
                            alt="" />
                    </div>

                    <div class="mx-auto mb-6 max-w-3xl space-y-6 md:mb-12">
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400 text-justify">
                            <b>{{ $profil->namaPerusahaan }}</b><br>
                            Alamat Toko bisa dikunjungi di {{ $profil->alamatToko }} <br>
                            Alamat Gudang bisa dikunjungi di {{ $profil->alamatGudang }} <br><br>
                        </p>

                        <p class="text-base font-normal text-gray-500 dark:text-gray-400 text-justify">
                            {!! nl2br(e($profil->deskripsiPerusahaan)) !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        @if (session('success'))
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: "Signed in successfully"
                });
            </script>
        @endif
    </div>
</x-layout>
