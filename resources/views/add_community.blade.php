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
</head>

<body class="bg-theme text-light">
  <main class="flex font-poppins h-screen">
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
            class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3">
            <div class="icon-wrap size-5 mr-3">
              <img src="assets/icons/overview-icon.png" alt="" />
            </div>
            <span class="text-sm">Ringkasan</span>
          </div>
          <div
            class="button flex justify-start items-center font-semibold border-none rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3 bg-button text-theme shadow-lg shadow-button/30">
            <div class="icon-wrap size-5 mr-3">
              <img src="assets/icons/people-icon.png" alt="" />
            </div>
            <span class="text-sm">Komunitas</span>
          </div>
          <div
            class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3">
            <div class="icon-wrap size-5 mr-3">
              <img src="assets/icons/manageTask-icon.png" alt="" />
            </div>
            <span class="text-sm">Tanding</span>
          </div>
          <div
            class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3">
            <div class="icon-wrap size-5 mr-3">
              <img src="assets/icons/rewards-icon.png" alt="" />
            </div>
            <span class="text-sm">Kupon</span>
          </div>
          <div
            class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3">
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
          <div
            class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3">
            <div class="icon-wrap size-5 mr-3">
              <img src="assets/icons/settings-icon.png" alt="" />
            </div>
            <span class="text-sm">Profil</span>
          </div>
          <div
            class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3">
            <div class="icon-wrap size-5 mr-3">
              <img src="assets/icons/help-icon.png" alt="" />
            </div>
            <span class="text-sm">Bantuan</span>
          </div>
          <div
            class="button flex justify-start items-center font-semibold border rounded-full border-outline py-2 pl-3 pr-16 cursor-pointer my-3">
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
    <div class="content bg-background rounded-l-[60px] flex-grow ml-6 overflow-auto">
      <!-- Top Bar Start -->
      <div class="top-bar bg-card flex w-4/5 mx-auto m-8 rounded-2xl justify-between">
        <div
          class="search-tab flex w-2/5 justify-between items-center font-normal border rounded-full border-outline py-2 pl-3 m-3">
          <p class="text-sm text-secondary pr-5">Cari..</p>
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
      <div class="heading mx-[6.5rem]">
        <h1 class="text-light font-extrabold text-xl">Buat Komunitas</h1>
        <p class="text-secondary text-xs">
          Cari teman dan bergabung dengan komunitas yang sesuai dengan
          minatmu!!
        </p>
      </div>
      <!-- Heading End -->

      <div class="flex flex-col">
        <!-- input community name start  -->
        <input type="text" id="community-name" placeholder="Nama Komunitas"
          class="mt-7 mx-[6.5rem] px-4 py-2 text-light bg-theme border rounded-lg focus:outline-none focus:border-gray-500" />
        <!-- input community name end -->

        <!-- input address start  -->
        <input type="text" id="address" placeholder="Alamat"
          class="mt-7 mx-[6.5rem] px-4 py-2 text-light bg-theme border rounded-lg focus:outline-none focus:border-gray-500" />
        <!-- input address end -->

        <!-- input motivation start  -->
        <textarea type="text" id="deskripsi" placeholder="Deskripsi komunitas" rows="10"
          class="mt-7 mx-[6.5rem] px-4 py-2 text-light bg-theme border rounded-lg focus:outline-none focus:border-gray-500"></textarea>
        <!-- input motivation end -->

        <!-- tombol save start -->
        <div
          class="mt-7 button text-center font-semibold rounded-full border-light py-2 w-36 cursor-pointer mx-[6.5rem] text-sm bg-gradient-to-b from-[#977FFF] to-[#6F4FFF]"
          onclick="Simpan()">
          Simpan
        </div>
        <!-- tombol save end -->
      </div>
    </div>
  </main>
  <script>
    function Simpan() {
      window.location.href = "/community";
    }
  </script>
</body>

</html>