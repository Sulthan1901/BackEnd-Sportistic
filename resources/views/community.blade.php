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
    <link rel="stylesheet" href="community_style.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-theme text-light">
    <main class="flex font-poppins h-screen">
        <!-- Sidebar Start -->
        <aside class="sidebar mx-5">
            <div class="logo flex m-5 justify-center items-center font-bold text-xl cursor-pointer">
                <div class="logo-wrap w-28 mx-1">
                    <a href="/home"><img src="assets/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="general-tab">
                <p class="uppercase font-semibold text-xs">Umum</p>
                <nav>
                    <div class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3"
                        onclick="overview()">
                        <div class="icon-wrap size-5 mr-3">
                            <img src="assets/icons/overview-icon.png" alt="" />
                        </div>
                        <span class="text-sm">Ringkasan</span>
                    </div>
                    <div class="button flex justify-start items-center font-semibold border-none rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3 bg-button text-theme shadow-lg shadow-button/30"
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
        <div class="content bg-background rounded-l-[60px] flex-grow ml-6">
            <!-- Top Bar Start -->
            <div class="top-bar bg-card flex w-4/5 mx-auto m-8 rounded-2xl justify-between">

                <input type="text"
                    class="search-tab flex w-2/5 justify-between items-center font-normal border rounded-full border-outline py-2 pl-3 m-3 bg-card"
                    placeholder="Cari...">

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
            <div class="heading flex flex-nowrap justify-between">
                <div class="heading mb-6 ml-[10%] w-4/5">
                    <h1 class="text-light font-extrabold text-xl">Komunitas</h1>
                    <p class="text-secondary text-xs">
                        Cari teman dan bergabung dengan komunitas yang sesuai dengan minatmu!!
                    </p>
                </div>
            </div>
            <!-- Heading End -->

            <!-- Card Start -->
            <div class="card-container flex flex-wrap justify-start max-w-5xl mx-auto">
                <div class="bg-[#27223E] rounded-3xl overflow-hidden my-5 mx-auto w-[30%] flex flex-col relative">
                    <div class="relative h-52 bg-cover bg-no-repeat"
                        style="background-image: url('./assets/community_pic.png');">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-80"></div>
                        <h2
                            class="absolute bottom-2 left-1/3 transform -translate-x-1/2 text-white font-bold text-lg text-shadow-md z-10">
                            Nama Komunitas 1
                        </h2>
                    </div>

                    <div class="p-4 text-white">
                        <p>Informasi komunitas</p>
                        <div class="flex justify-between items-center mt-2">
                            <button class="bg-[#FFD88D] text-[#0A061E] rounded-full py-1 px-4">
                                Masuk
                            </button>
                            <div class="text-sm text-[#7E7997] text-right">
                                <p>Anggota: 10/20</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#27223E] rounded-3xl overflow-hidden my-5 mx-auto w-[30%] flex flex-col relative">
                    <div class="relative h-52 bg-cover bg-no-repeat"
                        style="background-image: url('./assets/community_pic.png');">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-80"></div>
                        <h2
                            class="absolute bottom-2 left-1/3 transform -translate-x-1/2 text-white font-bold text-lg text-shadow-md z-10">
                            Nama Komunitas 2
                        </h2>
                    </div>

                    <div class="p-4 text-white">
                        <p>Informasi komunitas</p>
                        <div class="flex justify-between items-center mt-2">
                            <button class="bg-[#FFD88D] text-[#0A061E] rounded-full py-1 px-4">
                                Masuk
                            </button>
                            <div class="text-sm text-[#7E7997] text-right">
                                <p>Anggota: 10/20</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#27223E] rounded-3xl overflow-hidden my-5 mx-auto w-[30%] flex flex-col relative">
                    <div class="relative h-52 bg-cover bg-no-repeat"
                        style="background-image: url('./assets/community_pic.png');">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-80"></div>
                        <h2
                            class="absolute bottom-2 left-1/3 transform -translate-x-1/2 text-white font-bold text-lg text-shadow-md z-10">
                            Nama Komunitas 3
                        </h2>
                    </div>

                    <div class="p-4 text-white">
                        <p>Informasi komunitas</p>
                        <div class="flex justify-between items-center mt-2">
                            <button class="bg-[#FFD88D] text-[#0A061E] rounded-full py-1 px-4">
                                Masuk
                            </button>
                            <div class="text-sm text-[#7E7997] text-right">
                                <p>Anggota: 10/20</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card End -->
                <div class="button-wrap mb-8 absolute bottom-5 right-36">
                    <div class="button text-center text-5xl font-extralight rounded-full border-light w-16 h-16 cursor-pointer flex justify-center items-center mx-1 bg-gradient-to-b from-[#977FFF] to-[#6F4FFF] hover:bg-gradient-to-b hover:from-[#6F4FFF] hover:to-[#6F4FFF]"
                        onclick="AddCommunity()">
                        +
                    </div>
                </div>
                <!-- Main Content End -->
    </main>

    <script>
        function overview() {
            window.location.href = "/home"
        }

        function komunitas() {
            window.location.href = "community.html"
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

        function AddCommunity() {
            window.location.href = "/add_community"
        }
    </script>

</body>

</html>
