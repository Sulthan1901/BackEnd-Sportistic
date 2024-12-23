<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon" />
    <title>Sportistic</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    @vite('resources/css/app.css')

    <style>
        /* Breakpoint untuk smartphone (layar maksimal 640px) */
        @media (max-width: 640px) {
            body {
                padding: 0;
                margin: 0;
            }

            /* Menyembunyikan sidebar dan membuat menu dapat diakses melalui toggle */
            .sidebar {
                display: none;
            }

            /* Mengubah ukuran dan padding untuk elemen utama */
            .content {
                margin: 0;
                padding: 10px;
                border-radius: 0;
            }

            /* Menyesuaikan ukuran top bar agar lebih pas */
            .top-bar {
                flex-direction: column;
                width: 100%;
                margin: 10px 0;
            }

            .top-bar .search-tab,
            .top-bar .profil-tab {
                width: 100%;
                justify-content: center;
            }

            /* Menyusun ulang grid pada overview section menjadi satu kolom */
            .grid {
                grid-template-columns: 1fr;
                width: 100%;
            }

            /* Menyesuaikan ukuran elemen pada bagian Progress dan Community Highlights */
            .heading,
            .max-w-sm,
            .bg-card {
                width: 90%;
                margin: 0 auto;
            }

            /* Menyesuaikan tombol Quick Actions */
            .flex.justify-center.space-x-3 {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body class="bg-theme text-light">
    <main class="flex font-poppins">
        <!-- Sidebar Start -->
        <aside class="sidebar mx-5">
            <div class="logo flex m-5 justify-center items-center font-bold text-xl cursor-pointer">
                <div class="logo-wrap w-28 mx-1">
                    <a href="overview.html"><img src="assets/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="general-tab">
                <p class="uppercase font-semibold text-xs">Umum</p>
                <nav>
                    <div
                        class="button flex justify-start items-center font-semibold border-none rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3 bg-button text-theme shadow-lg shadow-button/30">
                        <div class="icon-wrap size-5 mr-3">
                            <img src="assets/icons/overview-icon.png" alt="" />
                        </div>
                        <span class="text-sm">Ringkasan</span>
                    </div>
                    <div class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3"
                        onclick="komunitas()">
                        <div class="icon-wrap size-5 mr-3">
                            <img src="assets/icons/people-icon.png" alt="" />
                        </div>
                        <span class="text-sm">Komunitas</span>
                    </div>
                    <div class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3"
                        onclick="main()">
                        <div class="icon-wrap size-5 mr-3">
                            <img src="assets/icons/manageTask-icon.png" alt="" />
                        </div>
                        <span class="text-sm">Tanding</span>
                    </div>
                    <div class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3"
                        onclick="kupon()">
                        <div class="icon-wrap size-5 mr-3">
                            <img src="assets/icons/rewards-icon.png" alt="" />
                        </div>
                        <span class="text-sm">Kupon</span>
                    </div>
                    <div class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3"
                        onclick="sewa()">
                        <div class="icon-wrap size-5 mr-3">
                            <img src="assets/icons/aiCustom-icon.png" alt="" />
                        </div>
                        <span class="text-sm">Sewa Lapangan</span>
                    </div>
                </nav>
            </div>
            <hr class="my-7 border-outline" />
            <div class="other-tab">
                <p class="uppercase font-semibold text-xs">Lainnya</p>
                <nav>
                    <div class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3"
                        onclick="profil()">
                        <div class="icon-wrap size-5 mr-3">
                            <img src="assets/icons/settings-icon.png" alt="" />
                        </div>
                        <span class="text-sm">Profil</span>
                    </div>
                    <div class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3"
                        onclick="tolong()">
                        <div class="icon-wrap size-5 mr-3">
                            <img src="assets/icons/help-icon.png" alt="" />
                        </div>
                        <span class="text-sm">Bantuan</span>
                    </div>
                    <div class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3"
                        onclick="keluar()">
                        <div class="icon-wrap size-5 mr-3">
                            <img src="assets/icons/logout-icon.png" alt="" />
                        </div>
                        <span class="text-sm">Keluar</span>
                    </div>
                </nav>
            </div>
        </aside>
        <!-- Sidebar End -->

        <!-- Main Content Start -->
        <div class="content bg-background rounded-l-[60px] flex-grow ml-6 h-screen overflow-scroll overflow-x-hidden">
            <!-- Top Bar Start -->
            <div class="top-bar bg-card flex w-4/5 mx-auto m-8 rounded-2xl justify-between">
                <div
                    class="search-tab flex w-2/5 justify-between items-center font-normal border rounded-full border-outline py-2 pl-3 m-3">
                    <p class="text-sm text-secondary pr-5">Cari...</p>
                    <div class="icon-wrap size-5 cursor-pointer mx-3">
                        <img src="assets/icons/search-icon.png" alt="" />
                    </div>
                </div>
                <div class="profil-tab flex justify-center items-center">
                    <div class="menu-icon rounded-full border border-outline p-2 mx-1">
                        <div class="icon size-5 cursor-pointer">
                            <img src="assets/icons/notif-icon.png" alt="" />
                        </div>
                    </div>
                    <div class="menu-icon rounded-full border border-outline p-2 mx-1">
                        <div class="icon size-5 cursor-pointer">
                            <img src="assets/icons/message-icon.png" alt="" />
                        </div>
                    </div>
                    <div class="mx-4 h-8 w-px bg-outline"></div>
                    <div class="profil flex items-center justify-center">
                        <div class="greeting text-end">
                            <p class="text-secondary text-xs">Halo,</p>
                            <p class="text-light font-bold text-sm">Janeeee</p>
                        </div>
                        <div class="img-wrap size-8 mx-3 cursor-pointer">
                            <img src="assets/profil-picture.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Heading Start -->
            <div class="heading mb-6 ml-[10%] w-4/5">
                <h1 class="text-light font-extrabold text-xl">Ringkasan</h1>
                <p class="text-secondary text-xs">Ringkasan Aktivitas Anda</p>
            </div>
            <!-- Heading End -->

            <!-- Overview Section Start -->
            <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mb-6 justify-center items-center mx-auto w-4/5 mt-16">
                <div class="bg-gradient-to-b from-[#977FFF] to-[#6F4FFF] p-2 rounded-md shadow text-center">
                    <h2 class="text-black text-sm">Permainan Dimainkan</h2>
                    <p class="text-2xl font-bold text-white my-2">15</p>
                    <p class="text-black text-xs">Jumlah permainan bulan ini</p>
                </div>
                <div class="bg-gradient-to-b from-[#977FFF] to-[#6F4FFF] p-2 rounded-md shadow text-center">
                    <h2 class="text-black text-sm">Target</h2>
                    <p class="text-2xl font-bold text-white my-2">10/12</p>
                    <p class="text-black text-xs">Target Tercapai</p>
                </div>
                <div class="bg-gradient-to-b from-[#977FFF] to-[#6F4FFF] p-2 rounded-md shadow text-center">
                    <h2 class="text-black text-sm">Aktivitas Komunitas</h2>
                    <p class="text-2xl font-bold text-white my-2">5 Unggahan</p>
                    <p class="text-black text-xs">Kontribusi Terbaru Kamu</p>
                </div>
                <div class="bg-gradient-to-b from-[#977FFF] to-[#6F4FFF] p-2 rounded-md shadow text-center">
                    <h2 class="text-black text-sm">Kalori Dibakar</h2>
                    <p class="text-2xl font-bold text-white my-2">1200 kcal</p>
                    <p class="text-black text-xs">Kalori Dibakar Minggu ini</p>
                </div>
            </div>


            <!-- Your Progress Section -->
            <h2 class="text-xl font-bold mb-3 text-center mt-16 py-6">Perkembangan Kamu</h2>
            <div class="mb-3 w-4/5 mx-auto">
                <p class="mb-1 text-sm text-center">Latihan Mingguan</p>
                <div class="bg-outline rounded-full h-3 mb-2">
                    <div class="bg-gradient-to-b from-[#977FFF] to-[#6F4FFF] h-3 rounded-full" style="width: 75%">
                    </div>
                </div>
                <p class="text-sm text-center">75%</p>
            </div>
            <div class="mb-4 w-4/5 mx-auto">
                <p class="mb-1 text-sm text-center py-6">Target Kalori Dibakar</p>
                <div class="bg-outline rounded-full h-3 mb-2">
                    <div class="bg-gradient-to-b from-[#977FFF] to-[#6F4FFF] h-3 rounded-full" style="width: 60%">
                    </div>
                </div>
                <p class="text-sm text-center">60%</p>
            </div>



            <!-- Community Highlights Section -->
            <h2 class="text-xl font-bold mb-3 text-center mt-16 py-6">Sorotan Komunitas</h2>
            <div class="bg-card p-3 rounded-lg shadow mb-9 text-center w-4/5 mx-auto">
                <p class="text-secondary text-sm ">Tidak ada Unggahan Baru di Komunitas.</p>
            </div>


            <!-- Quick Actions Section -->
            <h2 class="text-xl font-bold mt-16 mb-4 text-center">Aksi Cepat</h2>
            <div class="flex justify-center space-x-3 mb-20">
                <button class="bg-button text-theme px-3 py-1.5 rounded-lg text-sm w-60">
                    Cek Kupon
                </button>
                <button class="bg-button text-theme px-3 py-1.5 rounded-lg text-sm w-60">
                    Mulai Pertandingan Baru
                </button>
            </div>

            <!-- Overview Section End -->
    </main>

    <script>
        function komunitas() {
            window.location.href = "/community"
        }

        function main() {
            window.location.href = "matchmaking.html"
        }

        function kupon() {
            window.location.href = "reward.html"
        }

        function sewa() {
            window.location.href = "sewa_lapangan.html"
        }

        function profil() {
            window.location.href = "profile.html"
        }

        function tolong() {
            window.location.href = "help.html"
        }

        function keluar() {
            window.location.href = "login.html"
        }
    </script>
</body>

</html>
