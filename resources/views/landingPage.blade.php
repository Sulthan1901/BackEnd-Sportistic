<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportistic</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body,
        html {
            overflow-x: hidden;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-theme text-white">

    <!--header start-->
    <nav class="px-6 py-4 fixed top-0 left-0 right-0 z-10">

        <div class=" max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('assets/landingPageAssets/logo.png') }}" class="w-48" alt="">
            </div>

            <!-- Menu Items -->
            <div class="flex items-center space-x-8">
                <a href="#"
                    class="text-light text-lg font-bold hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-holland to-white">
                    Promo
                </a>
                <a href="#"
                    class="text-light text-lg font-bold hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-holland to-white">
                    Matchmaking
                </a>
                <a href="#"
                    class="text-light text-lg font-bold hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-holland to-white">
                    Partnership
                </a>
                <a href="#"
                    class="text-light text-lg font-bold hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-holland to-white">
                    Komunitas
                </a>
                <a href="/login"
                    class="text-light text-lg font-bold hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-holland to-white ">
                    Masuk
                </a>
                <a href="/registrasi">
                    <button
                        class="flex items-center font-bold rounded-full border border-white py-2 px-6 cursor-pointer my-3 hover:bg-holland hover:text-theme hover:shadow-lg hover:shadow-button/30">
                        Daftar
                    </button>
                </a>

            </div>
        </div>
    </nav>

    <!--header end-->

    <!--section start-->

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
                <h1
                    class="text-5xl font-bold pb-10 hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-holland to-white">
                    Sportistic
                </h1>

                <p class="w-1/3 pb-10 text-base">Your go-to app for sports. Sportistic provides all your needs from
                    finding partners to play with to find and book the court where you will be playing. No more hard
                    time planning, Sportistic is all you need.</p>

                <div class="ikon flex gap-4"> <!-- Tambahkan flex dan gap-4 di sini -->
                    <button
                        class="flex items-center font-bold rounded-full border border-white py-2 px-6 cursor-pointer hover:bg-holland hover:text-theme hover:shadow-lg hover:shadow-button/30">Get
                        started</button>
                    <button
                        class="flex items-center font-bold rounded-full border border-white py-2 px-6 cursor-pointer hover:bg-holland hover:text-theme hover:shadow-lg hover:shadow-button/30">download
                        now</button>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->

    <!--section 2 start-->
    <section>

        <div class="flex justify-center">
            <div>
                <div class="flex justify-center w-full">
                    <h1
                        class="mt-10 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                        FITUR KAMI
                    </h1>
                </div>

                <p class="text-2xl font-bold w-[28rem] mt-10 text-center">DIMANA DAN KAPAN SAJA, OLAHRAGA SESUAI WAKTUMU
                    SENDIRI!</p>
            </div>
        </div>

        <!--artikel fitur-->
        <article class="flex justify-around mt-14">

            <!--card-->
            <div class="card-1 size-80 bg-card rounded-xl shadow-xl shadow-button">

                <div class="flex justify-center mt-6">
                    <img src="{{ asset('assets/landingPageAssets/overview-icon.png') }}" alt="">

                </div>

                <div class="flex justify-center w-full">
                    <h1
                        class="mt-10 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                        Sewa Lapangan
                    </h1>
                </div>

                <p class="text-base font-medium  mt-8 text-center">BOOKING LAPANGAN LEBIH MUDAH , OLAHRAGA JADI NYAMAN
                </p>

            </div>
            <div class="card-2 size-80 bg-card rounded-xl shadow-xl shadow-button">

                <div class="flex justify-center mt-6">
                    <img src="{{ asset('assets/landingPageAssets/overview-icon.png') }}" alt="">

                </div>

                <div class="flex justify-center w-full">
                    <h1
                        class="mt-10 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                        Bergabung & Sparing
                    </h1>
                </div>

                <p class="text-base font-medium  mt-8 text-center px-2">PENGEN SPARING TAPI GA NEMU LAWAN ? PENGEN MAIN
                    TAPI BELUM PUNYA TIM? GABUNG KOMUNITAS DAN MAIN BERSAMA KOMUNITAS</p>
            </div>
            <div class="card-3 size-80 bg-card rounded-xl shadow-xl shadow-button">

                <div class="flex justify-center mt-6">
                    <img src="{{ asset('assets/landingPageAssets/overview-icon.png') }}" alt="">

                </div>

                <div class="flex justify-center w-full">
                    <h1
                        class="mt-10 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                        Partnership
                    </h1>
                </div>

                <p class="text-base font-medium  mt-8 text-center px-2">DAFTARKAN LAPANGAN ANDA DAN PASANG IKLAN DI
                    PLATFORM KAMI UNTUK MENJANGKAU LEBIH BANYAK KOMUNITAS OLAHRAGA AKTIF</p>
            </div>

        </article>

    </section>
    <!--section 2 end-->


    <!--section 3 mulai -->
    <section class=" flex justify-around mt-32 py-16 w-full ">
        <!-- Grid untuk gambar-gambar -->
        <aside class="  grid grid-cols-2 gap-4">

            <div class=" w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                <img src="{{ asset('assets/landingPageAssets/Badminton baddies.jpeg') }}" alt="">
            </div>

            <div class="flex flex-nowrap items-end  w-52 h-64 rounded-2xl overflow-hidden ">
                <img src="{{ asset('assets/landingPageAssets/kom.jpeg') }}"
                    class="rounded-t-2xl shadow-md shadow-button" alt="">
            </div>

            <div class=" w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                <img src="{{ asset('assets/landingPageAssets/Anfield sunset.jpeg') }}" alt="">
            </div>

            <div class=" w-52 h-52 rounded-2xl overflow-hidden shadow-md shadow-button">
                <img src="{{ asset('assets/landingPageAssets/download.jpeg') }}" alt="">
            </div>

        </aside>

        <!-- Section untuk teks -->
        <article class="  w-96 flex items-center">
            <div class="text-left">
                <h1 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white">
                    Temukan dan Sewa Lapangan Favoritmu dengan Mudah!</h1>
                <hr class="mt-8 mb-12 border-t-2 w-56">
                <p class="text-gray-200 font-semibold text-xl mb-4">Butuh lapangan untuk futsal, basket, atau olahraga
                    lainnya? Kami menyediakan beragam pilihan lapangan yang dapat kamu sewa kapan saja dan di mana saja.
                    Cukup pilih lokasi, tentukan waktu, dan nikmati kemudahan berolahraga tanpa repot!</p>
                <button
                    class="flex items-center font-bold rounded-full border border-white py-2 px-6 cursor-pointer hover:bg-holland hover:text-theme hover:shadow-lg hover:shadow-button/30">Sewa
                    Teross</button>
            </div>
        </article>
    </section>
    <!--section 3 end-->


    <!--mulai section 4-->
    <section class="mt-32 py-16 ">

        <div class="w-fit border-emerald-200 ml-40">
            <h1 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white">Temukan
                dan Sewa Lapangan Favoritmu dengan Mudah!</h1>
            <hr class="border-t-4 w-full mt-6 rounded-md">
        </div>


        <!--yang dibawah judul-->
        <section class=" flex justify-around mt-16 ">

            <aside class="kanan grid grid-cols-2 gap-4">

                <div class=" w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/ronaldo-muda.jpeg') }}" alt="">
                </div>

                <div class="flex flex-nowrap items-end  w-52 h-64 rounded-2xl overflow-hidden ">
                    <img src="{{ asset('assets/landingPageAssets/ronaldo-timnas.jpeg') }}"
                        class="rounded-t-2xl shadow-md shadow-button" alt="">
                </div>

                <div class=" w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/ronaldo-ucl.jpeg') }}" alt="">
                </div>

                <div class=" w-52 h-52 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/download.jpeg') }}" alt="">
                </div>

            </aside>

            <article class="  w-96 flex items-center">
                <div class="text-left">
                    <h1 class="text-2xl mb-12 font-bold text-holland">Sparing Gak Harus Ribet Gabung Komunitas dan Cari
                        Lawanmu!</h1>

                    <p class="text-gray-200 font-semibold text-center text-xl mb-4">Mau sparing tapi belum punya tim?
                        Jangan khawatir! Fitur ini memungkinkan kamu untuk menemukan pemain atau tim yang siap bermain.
                        Bergabung ke komunitas kami, atur jadwal, dan nikmati keseruan sparing bersama pemain lain
                        dengan mudah</p>
                    <div class="flex justify-center">
                        <button
                            class="flex items-center font-bold mt-11 rounded-full border border-white py-2 px-6 cursor-pointer hover:bg-holland hover:text-theme hover:shadow-lg hover:shadow-button/30">Tantang
                            Teross</button>
                    </div>
                </div>
                <!--article end-->
            </article>

            <aside class="kiri grid grid-cols-2 gap-4">

                <div class=" w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/messi-muda.jpeg') }}" alt="">
                </div>

                <div class="flex flex-nowrap items-end  w-52 h-64 rounded-2xl overflow-hidden ">
                    <img src="{{ asset('assets/landingPageAssets/messi-pildun.jpeg') }}"
                        class="rounded-t-2xl shadow-md shadow-button" alt="">
                </div>

                <div class=" w-52 h-64 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/Messi.jpeg') }}" alt="">
                </div>

                <div class=" w-52 h-52 rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/download.jpeg') }}" alt="">
                </div>

            </aside>
            <!--akhir section 4-->
        </section>


        <!--section 5 start-->
        <section class=" flex justify-around mt-32 py-16 w-full ">

            <!-- Section untuk teks -->
            <article class=" flex flex-1 p-16 items-center">
                <!--deskripsi-->
                <div class="text-left">

                    <div class="detail-1 ">
                        <h1
                            class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white">
                            Sponsorship Seru, Eksposur Maksimal untuk Lapangan & Brand Anda!</h1>
                        <hr class="mt-8 mb-12 border-t-2 w-56">
                        <p class="text-gray-200 font-semibold text-xl mb-4">Siap bawa lapangan atau brand Anda jadi
                            yang terdepan di dunia olahraga? Dengan fitur Sponsorship kami, Anda bisa meningkatkan
                            eksposur di depan komunitas pecinta olahraga yang aktif dan selalu siap aksi! Daftarkan
                            lapangan Anda agar mudah ditemukan pemain, atau tampilkan iklan yang membuat brand Anda
                            dilirik langsung oleh target audiens yang tepat. Kolaborasi ini bukan cuma sekadar kerja
                            sama, tapi kesempatan untuk tumbuh bareng
                            dan jadi pilihan utama di bidang olahraga. Yuk, gabung dan bikin dampak bersama!</p>
                        <button
                            class="flex mt-10 items-center font-bold rounded-full border border-white py-2 px-6 cursor-pointer hover:bg-holland hover:text-theme hover:shadow-lg hover:shadow-button/30">Partneran</button>

                    </div>

                    <!--sponsor-->
                    <aside class="mt-11  grid grid-cols-3 gap-3">

                        <div class="">
                            <img src="{{ asset('assets/landingPageAssets/Adidas_Logo.svg.png') }}" class="w-40 h-32"
                                alt="">
                        </div>

                        <div class=" ">
                            <img src="{{ asset('assets/landingPageAssets/Logo_Air_Mineral_Aqua.png') }}"
                                class="w-40 h-40" alt="">
                        </div>

                        <div class="">
                            <img src="{{ asset('assets/landingPageAssets/marvel.png') }}" class=""
                                alt="">
                        </div>

                        <div class="  ">
                            <img src="{{ asset('assets/landingPageAssets/Tesla_logo.png') }}" class="w-36 h-40"
                                alt="">
                        </div>

                        <div class="">
                            <img src="{{ asset('assets/landingPageAssets/Logo_of_North_Sumatra_University.svg.png') }}"
                                class="w-40 h-40" alt="">
                        </div>

                        <div class="">
                            <img src="{{ asset('assets/landingPageAssets/ditmawalumni.webp') }}" class=""
                                alt="">
                        </div>
                    </aside>
                </div>


            </article>

            <!-- Grid untuk gambar-gambar -->
            <aside class="grid grid-rows-2  p-8 gap-4">

                <div class=" w-96 h-[450px] rounded-2xl overflow-hidden shadow-md shadow-button">
                    <img src="{{ asset('assets/landingPageAssets/Partnership-1.jpeg') }}" class="h-[450px]"
                        alt="">
                </div>
            </aside>



        </section>
        <!--section 5 akhir-->

        <footer class="flex justify-around ">

            <!--kiri-->
            <div class="grid grid-rows-3 ">

                <!--isi-->
                <div class=" ">
                    <img src="{{ asset('assets/landingPageAssets/logo.png') }}" class="w-48 " alt="">
                    <h1
                        class="mt-10 pl-4 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-holland to-white inline-block">
                        Sportistic Industries
                    </h1>
                    <p class="w-1/2 pl-4">Jl. Alumni No.3, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara
                        20155, Indonesia</p>

                    <div class="mt-5 pl-4 flex ">
                        <img src="{{ asset('assets/landingPageAssets/overview-icon.png') }}" class="size-10"
                            alt="">
                        <a href="" class="pl-3">081266931722</a>
                    </div>

                </div>

                <div class=" copyright row-start-3">
                    <h1>2024 Sporstistic Industries All Right Reserved </h1>

                </div>

            </div>

            <!--kanan-->
            <div class="rounded-2xl flex justify-center items-center h-96 kanan bg-card">

                <div class="  grid grid-cols-3 h-44 gap-9  mx-14">

                    <div class="text-center ">Tentang kami</div>
                    <div class="text-center">Sponsorship</div>
                    <div class="text-center">Feedback</div>
                    <div class="text-center">njnjdkjd</div>
                    <div class="text-center"> fekfefneo</div>
                    <div class="text-center">nefoenfoe</div>
                    <div class="text-center">oenfoefn</div>

                </div>
            </div>
        </footer>
</body>

</html>