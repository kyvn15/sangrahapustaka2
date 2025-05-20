@extends('layouts.layout2')

@section('content')
    <div class="mt-24 mb-32 px-4"> {{-- Tambahkan jarak dari navbar & ke footer --}}
        <div class="p-5 text-center">
            <h1 class="text-4xl font-bold">Sangraha Pustaka</h1>
            <p class="text-base text-gray-700">( KATALOG KUMPULAN BUKU FIKSI & NON FIKSI )</p>
        </div>

        <hr class="border-t border-black w-4/5 mx-auto my-4">

        <div class="mt-4 flex justify-center">
            <img src="{{ asset('assets/img/banner.jpg') }}" class="w-full max-w-4xl" alt="Promo Banner">
        </div>

        <div class="w-full bg-gray-200 mt-16 p-5 rounded-lg">
            <h1 class="text-2xl font-bold mb-4 ml-32">Buku Terlaris</h1>
            <div class="flex items-center justify-center relative">
                <div class="w-1/5 mr-[60%] relative">
                    <img src="assets/img/banner2.webp" class="rounded-lg w-full" alt="Buku Terlaris Image">
                </div>
                <div class="flex overflow-x-auto pl-44 absolute">
                    <!-- Book item -->
                    <a href="https://youtube.com"
                        class="bg-white border border-gray-300 rounded-lg p-3 w-40 text-center shadow-md text-black mr-5 hover:text-cyan-600">
                        <img src="assets/img/yellowface.jpg" class="mb-2 rounded w-24 h-36 mx-auto" alt="Yellowface">
                        <h3 class="text-sm font-semibold">R.F. KUANG<br>YELLOWFACE</h3>
                        <p class="text-xs text-gray-600">Rp 95.500</p>
                    </a>
                    <a href="{{ route('detailbuku.index') }}"
                        class="bg-white border border-gray-300 rounded-lg p-3 w-40 text-center shadow-md text-black mr-5 hover:text-cyan-600">
                        <img src="assets/img/3726.jpg" class="mb-2 rounded w-24 h-36 mx-auto" alt="3726 MDPL">
                        <h3 class="text-sm font-semibold">Nurwina Sari.<br>3726 MDPL</h3>
                        <p class="text-xs text-gray-600">Rp 90.500</p>
                    </a>
                    <a href="https://youtube.com"
                        class="bg-white border border-gray-300 rounded-lg p-3 w-40 text-center shadow-md text-black mr-5 hover:text-cyan-600">
                        <img src="assets/img/bandung.jpg" class="mb-2 rounded w-24 h-36 mx-auto" alt="Bandung After Rain">
                        <h3 class="text-sm font-semibold">Wulan Nur Amalia<br>BANDUNG AFTER RAIN</h3>
                        <p class="text-xs text-gray-600">Rp 99.500</p>
                    </a>
                    <a href="https://youtube.com"
                        class="bg-white border border-gray-300 rounded-lg p-3 w-40 text-center shadow-md text-black mr-5 hover:text-cyan-600">
                        <img src="assets/img/ananta.jpg" class="mb-2 rounded w-24 h-36 mx-auto" alt="Ananta Prihadi">
                        <h3 class="text-sm font-semibold">Risa Saraswati<br>ANANTA PRIHADI</h3>
                        <p class="text-xs text-gray-600">Rp 65.300</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
