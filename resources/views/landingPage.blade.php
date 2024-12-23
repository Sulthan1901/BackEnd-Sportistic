<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sportistic</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite('resources/css/app.css')
</head>

<body class="bg-theme text-white overflow-x-hidden font-poppins">
    <!--header start-->
    <nav
        class="px-6 py-4 fixed top-0 left-0 w-screen z-10 flex items-center justify-between transition-colors duration-500">
        <!-- Logo -->
        <div class="flex items-center mx-7">
            <a href="">
                <img src="{{ asset('assets/landingPageAssets/logo.png') }}" class="w-48" alt="" />
            </a>
        </div>

        <!-- Menu Items -->
        <div class="mx-7 flex items-center space-x-8">
            <a href="#sewa"
                class="group relative inline-block text-light text-lg font-regular hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-[#3c64be] to-light">
                Sewa Lapangan
                <span
                    class="absolute bottom-0 left-0 h-[2px] w-0 bg-secondary transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#matchmaking"
                class="group relative inline-block text-light text-lg font-regular hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-[#3c64be] to-light">
                Tanding
                <span
                    class="absolute bottom-0 left-0 h-[2px] w-0 bg-secondary transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#partnership"
                class="group relative inline-block text-light text-lg font-regular hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-[#3c64be] to-light">
                Kolaborasi
                <span
                    class="absolute bottom-0 left-0 h-[2px] w-0 bg-secondary transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#komunitas"
                class="group relative inline-block text-light text-lg font-regular hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-[#3c64be] to-light">
                Komunitas
                <span
                    class="absolute bottom-0 left-0 h-[2px] w-0 bg-secondary transition-all duration-300 group-hover:w-full"></span>
            </a>

            <div class="px-5 flex items-center justify-center">
                <a href="/registrasi">
                    <div class="relative group">
                        <button
                            class="relative inline-block p-px font-semibold leading-6 text-white bg-gray-800 shadow-2xl cursor-pointer rounded-xl shadow-zinc-900 transition-transform duration-300 ease-in-out hover:scale-105 active:scale-95">
                            <span
                                class="absolute inset-0 rounded-xl bg-gradient-to-r from-teal-400 via-blue-500 to-purple-500 p-[2px] opacity-0 transition-opacity duration-500 group-hover:opacity-100"></span>

                            <span class="relative z-10 block px-6 py-3 rounded-xl bg-gray-950">
                                <div class="relative z-10 flex items-center space-x-2">
                                    <span class="transition-all duration-500 group-hover:translate-x-1">Daftar
                                        Sekarang</span>
                                    <svg class="w-6 h-6 transition-transform duration-500 group-hover:translate-x-1"
                                        data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                            fill-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </span>
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </nav>
    <!--header end-->

    <!--hero section start-->
    <section id="beranda" class="w-screen h-screen relative">
        <!-- backgorund with overlay -->
        <div class="absolute inset-0">
            <div class="w-full h-full bg-cover bg-center brightness-[.4]"
                style="background-image: url('{{ asset('assets/landingPageAssets/abigail-keenan-8-s5QuUBtyM-unsplash.jpg') }}');">
            </div>
        </div>

        <!-- Content-->
        <div class="relative h-full flex items-center">
            <div class="deskripsi left-36 ml-36">
                <h1 class="text-5xl font-bold pb-10">
                    <span class="hover:text-blue-300 font-fraunces">Aplikasi mudah dan sederhana!!</span>
                </h1>

                <p class="w-1/3 pb-10 text-base">
                    Website olahraga andalan anda! Sportistic menyediakan semua
                    kebutuhan olahraga kamu, mulai dari pencarian pasangan, booking
                    lapangan, hingga pemesanan tiket. Tidak sulit untuk memulai,
                    Sportistic-lah yang kamu butuhkan.
                </p>

                <div class="ikon flex gap-4">
                    <!-- Tambahkan flex dan gap-4 di sini -->

                    <button
                        class="group/button relative inline-flex items-center justify-center overflow-hidden rounded-full bg-gray-800/30 backdrop-blur-lg px-6 py-2 text-base font-semibold text-white transition-all duration-300 ease-in-out hover:scale-110 hover:shadow-xl hover:shadow-gray-600/50 border border-white/20">
                        <a href="#fitur">
                            <span class="text-lg">Mulai</span>
                            <div
                                class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-13deg)_translateX(-100%)] group-hover/button:duration-1000 group-hover/button:[transform:skew(-13deg)_translateX(100%)]">
                                <div class="relative h-full w-10 bg-white/20"></div>
                            </div>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--fitur section start-->
    <section id="fitur" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500" class="scroll-mt-20">
        <div class="flex justify-center">
            <div>
                <div class="flex justify-center w-full">
                    <h1
                        class="mt-10 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                        FITUR KAMI
                    </h1>
                </div>

                <p class="text-2xl font-bold w-[28rem] mt-10 text-center">
                    DIMANA DAN KAPAN SAJA, OLAHRAGA SESUAI WAKTUMU SENDIRI!
                </p>
            </div>
        </div>

        <!--artikel fitur-->
        <article class="flex justify-around mt-14">
            <!--card-->
            <div class="card-1 size-80 bg-card rounded-xl shadow-xl shadow-button">
                <div class="flex justify-center mt-6">
                    <img src="{{ asset('assets/landingPageAssets/overview-icon.png') }}" alt="" />
                </div>

                <div class="flex justify-center w-full">
                    <h1
                        class="mt-10 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                        Sewa Lapangan
                    </h1>
                </div>

                <p class="text-base font-medium mt-8 text-center">
                    BOOKING LAPANGAN LEBIH MUDAH , OLAHRAGA JADI NYAMAN
                </p>
            </div>
            <div class="card-2 size-80 bg-card rounded-xl shadow-xl shadow-button">
                <div class="flex justify-center mt-6">
                    <img src="{{ asset('assets/landingPageAssets/overview-icon.png') }}" alt="" />
                </div>

                <div class="flex justify-center w-full">
                    <h1
                        class="mt-10 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                        Olahraga Bersama
                    </h1>
                </div>

                <p class="text-base font-medium mt-8 text-center px-2">
                    PENGEN MAIN TAPI GA NEMU LAWAN ? PENGEN MAIN TAPI BELUM PUNYA TIM?
                    GABUNG DENGAN KOMUNITAS DAN MAIN BERSAMA!
                </p>
            </div>
            <div class="card-3 size-80 bg-card rounded-xl shadow-xl shadow-button">
                <div class="flex justify-center mt-6">
                    <img src="{{ asset('assets/landingPageAssets/overview-icon.png') }}" alt="" />
                </div>

                <div class="flex justify-center w-full">
                    <h1
                        class="mt-10 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                        Kolaborasi
                    </h1>
                </div>

                <p class="text-base font-medium mt-8 text-center px-2">
                    DAFTARKAN LAPANGAN ANDA DAN PASANG IKLAN DI PLATFORM KAMI UNTUK
                    MENJANGKAU LEBIH BANYAK KOMUNITAS OLAHRAGA AKTIF
                </p>
            </div>
        </article>
    </section>
    <!--fitur section end-->

    <!--sewa section start -->
    <section id="sewa" class="scroll-mt-20 flex justify-around mt-32 py-16 w-full" data-aos="fade-right"
        data-aos-delay="500" data-aos-duration="500">
        <!-- Grid untuk gambar-gambar -->
        <aside class="grid grid-cols-2 gap-4">
            <div class="group w-52 h-64 rounded-2xl overflow-hidden cursor-pointer">
                <img src="{{ asset('assets/landingPageAssets/Badminton baddies.jpeg') }}" alt=""
                    class="group-hover:scale-110 transition duration-500 ease-in-out" />
            </div>

            <div class="group flex flex-nowrap items-end w-52 h-64 rounded-2xl overflow-hidden cursor-pointer">
                <img src="{{ asset('assets/landingPageAssets/kom.jpeg') }}" alt=""
                    class="group-hover:scale-110 transition duration-500 ease-in-out rounded-t-2xl overflow-hidden" />
            </div>

            <div class="group w-52 h-64 rounded-2xl overflow-hidden cursor-pointer">
                <img src="{{ asset('assets/landingPageAssets/Anfield sunset.jpeg') }}" alt=""
                    class="group-hover:scale-110 transition duration-500 ease-in-out" />
            </div>

            <div class="group w-52 h-52 rounded-2xl overflow-hidden cursor-pointer">
                <img src="{{ asset('assets/landingPageAssets/download.jpeg') }}" alt=""
                    class="group-hover:scale-110 transition duration-500 ease-in-out" />
            </div>
        </aside>

        <!-- Section untuk teks -->
        <article class="w-96 flex items-center">
            <div class="text-left">
                <h1 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white">
                    Temukan dan Sewa Lapangan Favoritmu dengan Mudah!
                </h1>
                <hr class="mt-8 mb-12 border-t-2 w-56" />
                <p class="text-gray-200 font-semibold text-xl mb-4">
                    Butuh lapangan untuk futsal, basket, atau olahraga lainnya? Kami
                    menyediakan beragam pilihan lapangan yang dapat kamu sewa kapan saja
                    dan di mana saja. Cukup pilih lokasi, tentukan waktu, dan nikmati
                    kemudahan berolahraga tanpa repot!
                </p>
                <button
                    class="flex items-center font-bold rounded-full border border-white py-2 px-6 cursor-pointer hover:bg-holland hover:text-theme hover:shadow-lg hover:shadow-button/30">
                    Sewa Teross
                </button>
            </div>
        </article>
    </section>
    <!--sewa section end-->

    <!--tantang section start-->
    <section id="matchmaking" class="scroll-mt-10 mt-32 py-16">
        <div class="w-fit border-emerald-200 ml-40">
            <h1 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white">
                Temukan dan Sewa Lapangan Favoritmu dengan Mudah!
            </h1>
            <hr class="border-t-4 w-full mt-6 rounded-md" />
        </div>

        <!--yang dibawah judul-->
        <section class="flex justify-around mt-16">
            <aside class="kanan grid grid-cols-2 gap-4">
                <div class="w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/ronaldo-muda.jpeg') }}" alt="" />
                </div>

                <div class="flex flex-nowrap items-end w-52 h-64 rounded-2xl overflow-hidden">
                    <img src="{{ asset('assets/landingPageAssets/ronaldo-timnas.jpeg') }}"
                        class="rounded-t-2xl shadow-md shadow-button" alt="" />
                </div>

                <div class="w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/ronaldo-ucl.jpeg') }}" alt="" />
                </div>

                <div class="w-52 h-52 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/download.jpeg') }}" alt="" />
                </div>
            </aside>

            <article class="w-96 flex items-center">
                <div class="text-left">
                    <h1 class="text-2xl mb-12 font-bold text-holland">
                        Olahraga Gak Harus Ribet! Bergabung dengan Komunitas dan Cari
                        Lawanmu!
                    </h1>

                    <p class="text-gray-200 font-semibold text-center text-xl mb-4">
                        Mau main tapi belum punya tim? Jangan khawatir! Fitur ini
                        memungkinkan kamu untuk menemukan pemain atau tim yang siap
                        bermain. Bergabung ke komunitas kami, atur jadwal, dan nikmati
                        keseruan bermain bersama pemain lain dengan mudah
                    </p>
                    <div class="flex justify-center">
                        <button
                            class="flex items-center font-bold mt-11 rounded-full border border-white py-2 px-6 cursor-pointer hover:bg-holland hover:text-theme hover:shadow-lg hover:shadow-button/30">
                            Tantang Teross
                        </button>
                    </div>
                </div>
                <!--article end-->
            </article>

            <aside class="kiri grid grid-cols-2 gap-4">
                <div class="w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/messi-muda.jpeg') }}" alt="" />
                </div>

                <div class="flex flex-nowrap items-end w-52 h-64 rounded-2xl overflow-hidden">
                    <img src="{{ asset('assets/landingPageAssets/messi-pildun.jpeg') }}"
                        class="rounded-t-2xl shadow-md shadow-button" alt="" />
                </div>

                <div class="w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/Messi.jpeg') }}" alt="" />
                </div>

                <div class="w-52 h-52 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/download.jpeg') }}" alt="" />
                </div>
            </aside>
        </section>
    </section>

    <!--sponsorship start-->
    <section id="partnership" class="scroll-mt-20 flex justify-around mt-32 py-16 w-full">
        <!-- Section untuk teks -->
        <article class="flex flex-1 p-16 items-center">
            <!--deskripsi-->
            <div class="text-left">
                <div class="detail-1">
                    <h1
                        class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white">
                        Kolaborasi Seru, Eksposur Maksimal untuk Lapangan & Brand Anda!
                    </h1>
                    <hr class="mt-8 mb-12 border-t-2 w-56" />
                    <p class="text-gray-200 font-semibold text-xl mb-4">
                        Siap bawa lapangan atau merek Anda jadi yang terdepan di dunia
                        olahraga? Dengan fitur kolaborasi kami, Anda bisa meningkatkan
                        eksposur di depan komunitas pecinta olahraga yang aktif dan selalu
                        siap aksi! Daftarkan lapangan Anda agar mudah ditemukan pemain,
                        atau tampilkan iklan yang membuat brand Anda dilirik langsung oleh
                        target audiens yang tepat. Kolaborasi ini bukan hanya sekadar
                        kerja sama, tapi kesempatan untuk tumbuh bareng dan jadi pilihan
                        utama di bidang olahraga. Yuk, gabung dan buat dampak bersama!
                    </p>
                    <button
                        class="flex mt-10 items-center font-bold rounded-full border border-white py-2 px-6 cursor-pointer hover:bg-holland hover:text-theme hover:shadow-lg hover:shadow-button/30">
                        Kolaborasi
                    </button>
                </div>

                <!--sponsor-->
                <aside class="mt-11 grid grid-cols-3 gap-3">
                    <div class="">
                        <img src="{{ asset('assets/landingPageAssets/Adidas_Logo.svg.png') }}" class="w-40 h-32"
                            alt="" />
                    </div>

                    <div class=" ">
                        <img src="{{ asset('assets/landingPageAssets/Logo_Air_Mineral_Aqua.png') }}"
                            class="w-40 h-40" alt="" />
                    </div>

                    <div class="">
                        <img src="{{ asset('assets/landingPageAssets/marvel.png') }}" class=""
                            alt="" />
                    </div>

                    <div class="  ">
                        <img src="{{ asset('assets/landingPageAssets/Tesla_logo.png') }}" class="w-36 h-40"
                            alt="" />
                    </div>

                    <div class="">
                        <img src="{{ asset('assets/landingPageAssets/Logo_of_North_Sumatra_University.svg.png') }}"
                            class="w-40 h-40" alt="" />
                    </div>

                    <div class="">
                        <img src="{{ asset('assets/landingPageAssets/ditmawalumni.webp') }}" class=""
                            alt="" />
                    </div>
                </aside>
            </div>
        </article>

        <!-- Grid untuk gambar-gambar -->
        <aside class="grid grid-rows-2 p-8 gap-4">
            <div class="w-96 h-[450px] rounded-2xl overflow-hidden shadow-md shadow-button">
                <img src="{{ asset('assets/landingPageAssets/Partnership-1.jpeg') }}" class="h-[450px]"
                    alt="" />
            </div>
        </aside>
    </section>
    <!--sponsorship end-->

    <!-- footer start -->
    <footer class="flex justify-around -mb-20">
        <!--kiri-->
        <div class="grid grid-rows-3">
            <!--isi-->
            <div class=" ">
                <img src="{{ asset('assets/landingPageAssets/logo.png') }}" class="w-48" alt="" />
                <h1
                    class="mt-10 pl-4 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                    Sportistic Industries
                </h1>
                <p class="w-1/2 pl-4">
                    Jl. Alumni No.3, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera
                    Utara 20155, Indonesia
                </p>

                <div class="mt-5 pl-4 flex">
                    <img src="{{ asset('assets/landingPageAssets/overview-icon.png') }}" class="size-10"
                        alt="" />
                    <a href="" class="pl-3">081266931722</a>
                </div>
            </div>

            <div class="copyright row-start-3">
                <h1>
                    2024 Sporstistic Industries | Semua Hak Dilindungi Undang-Undang
                </h1>
            </div>
        </div>

        <!--kanan-->
        <div class="rounded-2xl flex justify-center items-center h-96 kanan bg-card">
            <div class="grid grid-cols-3 h-44 gap-9 mx-14">
                <div class="text-center">Tentang kami</div>
                <div class="text-center">Kolaborasi</div>
                <div class="text-center">Saran</div>
                <div class="text-center">Syarat dan Ketentuan</div>
                <div class="text-center">Kebijakan Privasi</div>
                <div class="text-center">Kontak</div>
                <div class="text-center"></div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <div class="overflow-hidden relative bg-template">
        <div class="flex animate-scroll gap-8">
            <!-- Daftar Logo -->
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 1" class="h-16" />
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 2" class="h-16" />
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 3" class="h-16" />
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 4" class="h-16" />
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 5" class="h-16" />
            <!-- Salinan untuk menciptakan efek loop -->
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 1" class="h-16" />
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 2" class="h-16" />
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 3" class="h-16" />
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 4" class="h-16" />
            <img src="{{ asset('assets/logo.png') }}" alt="Logo 5" class="h-16" />
        </div>
    </div>

    <script>
        // Ambil elemen navbar
        const nav = document.querySelector("nav");

        // Tambahkan event listener untuk mendeteksi scroll
        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                // Tambahkan class blur jika scroll lebih dari 50px
                nav.classList.add("bg-theme", "border-b");
            } else {
                // Hapus class bg-theme, blur-sm"); jika kembali ke atas
                nav.classList.remove("bg-theme", "border-b");
            }
        });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
