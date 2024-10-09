<x-layout>
    <x-slot:titles>Profil Perusahaan</x-slot:titles>

    <div class="min-h-full">
        <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <div class="mx-auto max-w-5xl">

                    <div class="my-8 xl:mb-16 xl:mt-12">
                        <img class="w-full dark:hidden"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-showcase.svg" alt="" />
                        <img class="hidden w-full dark:block"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-showcase-dark.svg"
                            alt="" />
                    </div>

                    <div class="mx-auto mb-6 max-w-3xl space-y-6 md:mb-12">
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400 text-justify">Connectivity
                            includes
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

                        <p class="text-base font-normal text-gray-500 dark:text-gray-400 text-justify">A-Grade/CR: iMacs
                            are
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
