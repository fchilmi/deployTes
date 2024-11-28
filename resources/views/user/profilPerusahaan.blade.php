<x-layout>
    <x-slot:titles>Profil Perusahaan</x-slot:titles>

    <div class="min-h-full">
        <section class="py-8 antialiased dark:bg-gray-900 md:py-16" style="background-color: #2b2b36">
            <div class="mx-auto max-w-screen-xl 2xl:px-0 bg-gray-700 shadow-2xl">
                <img class="w-full" src="/img/{{ $profil->GambarPerusahaan1 }}" alt="" />
                <div class="mx-auto max-w-5xl">

                    <div class="mx-auto mb-6 max-w-3xl space-y-6 md:mb-12">
                        <p class="text-base font-normal text-gray-200 dark:text-gray-400 text-justify pt-10">
                            <b>{{ $profil->namaPerusahaan }}</b><br>
                            Alamat Toko bisa dikunjungi di {{ $profil->alamatToko }} <br>
                            Alamat Gudang bisa dikunjungi di {{ $profil->alamatGudang }} <br><br>
                        </p>

                        <p class="text-base font-normal text-gray-200 dark:text-gray-400 text-justify pb-10">
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
