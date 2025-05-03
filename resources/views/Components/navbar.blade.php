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
<script>
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    });
</script>
