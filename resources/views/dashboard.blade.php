<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>AgriHive - Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 pt-20">

<!-- Navbar -->
<nav class="bg-green-700 text-white fixed top-0 w-full z-50 shadow-md">
<div class="flex items-center justify-between w-full px-4 py-3">
    <div class="flex items-center space-x-2">
    <span class="text-xl font-semibold">AgriHive</span>
    </div>

    <!-- Menu pilihan navbar di Kanan -->
    <div class="hidden md:flex space-x-6 ml-auto">
    <a href="#" class="font-semibold text-yellow-300">Beranda</a>
    <a href="#" class="hover:text-yellow-300">Pengelolaan Bibit</a>
    <a href="#" class="hover:text-yellow-300">Akun</a>
    </div>

    <!-- Tombol menu untuk versi mobile -->
    <div class="md:hidden">
    <button id="menu-button" class="focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
    </div>
</div>

<!-- Menu mobile -->
<div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-2">
    <a href="#" class="block hover:text-yellow-300">Beranda</a>
    <a href="#" class="block hover:text-yellow-300">Pengelolaan Bibit</a>
    <a href="#" class="block hover:text-yellow-300">Akun</a>
</div>
</nav>

<section class="max-w-[1600px] mx-auto flex flex-col-reverse lg:flex-row items-center justify-center min-h-[80vh] -mt-8 px-6 py-16">
    <div class="lg:w-1/2 mt-10 lg:mt-0 text-center lg:text-left">
        <h1 class="text-4xl md:text-5xl font-light mb-4">Selamat Datang, <span class="font-bold">Rekan Tani !</span></h1>
        <h2 class="text-4xl md:text-5xl font-bold text-green-700 mb-6">Di AgriHive</h2>
        <p class="text-gray-700 mb-8 text-base md:text-lg">
            <span class="font-bold">AgriHive</span> adalah platform digital yang dirancang untuk membantu rekan tani dalam menerima pengajuan bibit dari agen secara cepat, menjangkau lebih banyak mitra baru, dan mengelola beragam katalog produk hortikultura. Lewat sistem terpadu, Anda bisa melihat broadcast kebutuhan agen, serta memastikan pasokan bibit selalu siap dan terdistribusi tepat sasaran.
        </p>
        <button class="bg-yellow-400 hover:bg-yellow-500 text-black px-8 py-4 rounded-full flex items-center mx-auto lg:mx-0 space-x-2 text-lg">
            <span>Lihat Stok Bibit Anda</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
        </button>
    </div>
<div class="lg:w-1/2 flex justify-center">
    <img src="img/foto_orang.png" alt="Rekan Tani" class="w-full h-auto rounded-lg">
</div>
</section>
  <!-- Mobile menu script -->
  <script>
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
