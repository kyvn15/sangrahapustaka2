@extends('layouts.layout')
@section('content')

<div class="flex justify-center items-center min-h-screen px-5 py-10">
  <div class="flex max-w-5xl rounded-lg shadow-md bg-white p-8">
    <div class="flex-1 flex justify-center items-center">
      <img src="{{ asset('assets/img/sangraha.jpg') }}" alt="Sangraha Pustaka Logo" class="w-72 h-72 rounded-lg border-4 border-blue-500" />
    </div>
    <div class="flex-1 pl-8">
      <h1 class="mb-5 text-black text-3xl font-semibold">About Us</h1>

      <!-- Paragraf awal -->
      <p class="mb-4 text-gray-700 leading-relaxed">
        Sangraha Pustaka, yang berdiri sejak tanggal 15 November 2023, merupakan sebuah platform online yang
        fokus pada penjualan buku-buku terlaris dari berbagai genre. Dengan semangat untuk menyediakan akses
        mudah dan cepat bagi para pencinta literasi, kami menghadirkan beragam pilihan buku yang berkualitas.
      </p>

      <!-- Konten tersembunyi -->
      <div id="moreText" class="hidden">
        <p class="mb-4 text-gray-700 leading-relaxed">
          Mulai dari fiksi hingga non-fiksi, kami menyediakan buku favorit banyak pembaca. Kami percaya bahwa setiap buku memiliki kekuatan untuk menginspirasi, mendidik, dan membawa perubahan bagi para pembacanya.
        </p>
        <p class="text-gray-700 leading-relaxed">
          Nama Sangraha Pustaka diambil dari kata "Sangraha" yang bermakna kumpulan atau koleksi, serta
          "Pustaka" yang berarti buku atau literatur. Filosofi ini mencerminkan visi kami untuk menjadi tempat
          yang terpercaya dalam menyediakan koleksi buku terbaik bagi semua kalangan. Melalui Sangraha
          Pustaka, kami ingin membangun budaya membaca yang lebih kuat dan menjadi sahabat terbaik bagi mereka
          yang haus akan pengetahuan dan inspirasi melalui buku.
        </p>
      </div>

      <!-- Tombol toggle -->
      <button id="toggleBtn" class="mt-4 text-blue-600 font-semibold hover:underline focus:outline-none">
        Baca Selengkapnya
      </button>
    </div>
  </div>
</div>

<script>
  const toggleBtn = document.getElementById('toggleBtn');
  const moreText = document.getElementById('moreText');

  toggleBtn.addEventListener('click', function () {
    moreText.classList.toggle('hidden');
    toggleBtn.textContent = moreText.classList.contains('hidden') ? 'Baca Selengkapnya' : 'Tutup';
  });
</script>

@endsection
