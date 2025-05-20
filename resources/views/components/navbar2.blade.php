<div>
    <nav class="bg-gray-100 shadow-md">
        <div class="container mx-auto flex flex-wrap items-center justify-between px-4 py-3">

            <!-- Logo -->
            <a class="text-[25px] font-extrabold font-sans ml-4">SP.ID</a>

            <!-- Toggler button (untuk mobile) -->
            <button class="lg:hidden text-gray-700" type="button">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 5h14M3 10h14M3 15h14" clip-rule="evenodd"></path>
                </svg>
            </button>

            <!-- Search form -->
            <form class="hidden lg:flex ml-[70px]">
                <input type="search" placeholder="Cari Produk, Judul Buku" aria-label="Search"
                    class="w-[450px] rounded-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </form>

            <!-- Menu dan Dropdown -->
            <div class="hidden lg:flex items-center ml-[10%] space-x-[25px]">
                <ul class="flex items-center space-x-[25px] text-gray-800 font-medium">
                    <li><a class="hover:text-blue-600" href="{{ route('sangraha.index') }}">HOME</a></li>
                    <li><a class="hover:text-blue-600" href="{{ route('about.index') }}">ABOUT</a></li>
                    <li class="relative">
                        <button id="kategoriBtn" class="flex items-center font-bold hover:text-blue-600 focus:outline-none">
                            KATEGORI
                            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21L10 12.5l4.77-5.29-1.42-1.42L10 9.67 6.65 5.79 5.23 7.21z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <ul id="kategoriMenu"
                            class="absolute left-0 mt-2 hidden bg-white shadow-md rounded-md w-40 z-10">
                            <li><a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('fiksi.index') }}">FIKSI</a></li>
                            <li><a class="block px-4 py-2 hover:bg-gray-100" href="{{ route('nonfiksi.index') }}">NON FIKSI</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const kategoriBtn = document.getElementById('kategoriBtn');
        const kategoriMenu = document.getElementById('kategoriMenu');

        // Toggle menu saat tombol diklik
        kategoriBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            kategoriMenu.classList.toggle('hidden');
        });

        // Jangan tutup menu kalau klik di dalam
        kategoriMenu.addEventListener('click', function (e) {
            e.stopPropagation();
        });

        // Tutup menu kalau klik di luar
        document.addEventListener('click', function () {
            kategoriMenu.classList.add('hidden');
        });
    });
</script>
