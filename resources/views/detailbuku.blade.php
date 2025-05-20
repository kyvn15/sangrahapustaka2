@extends('layouts.layout')
@section('content')

<div class="breadcrumb flex gap-2 mt-5 ml-16 text-black text-sm">
  <a href="home.html" class="hover:underline">HOME</a>
  <span class=""> &gt; </span>
  <a href="fiksi.html" class="hover:underline">FIKSI</a>
</div>

<div class="content flex gap-8 w-[90%] mx-auto mt-8">
  <div class="book-cover">
    <img src="assets/img/3726.jpg" alt="3726 MDPL" class="w-[300px] rounded-lg shadow-md" />
  </div>
  <div class="book-details flex-1 bg-white p-16 rounded-lg shadow-md">
    <h1 class="text-sm font-normal">Nurwina Sari</h1>
    <h2 class="text-2xl font-bold mt-1">3726 MDPL</h2>
    <p class="price text-lg text-red-600 mt-2 mb-4">Rp 89.500</p>

    <div class="book-meta mt-5 space-y-1 text-sm">
      <p><strong>Penerbit:</strong> Romancius</p>
      <p><strong>Genre :</strong> Romantis</p>
      <p><strong>Tanggal Terbit:</strong> 12 Sep 2024</p>

      <div class="book-meta2 flex space-x-6 mt-4">
        <p><strong>ISBN:</strong> 9786233102599</p>
        <p><strong>Halaman:</strong> 280</p>
      </div>

      <div class="book-meta3 mt-6">
        <p>
          <strong>Format Buku:</strong>
          <span class="softcover inline-block mr-2 bg-gray-200 px-3 py-1 rounded text-xs cursor-pointer hover:bg-cyan-500 hover:text-white transition">SOFT COVER</span>
          <span class="hardcover inline-block bg-gray-200 px-3 py-1 rounded text-xs cursor-pointer hover:bg-cyan-500 hover:text-white transition">HARD COVER</span>
        </p>
      </div>
    </div>
  </div>

  <div class="book-description mt-5 bg-white p-16 rounded-lg shadow-md h-[350px] overflow-auto w-[400px]">
    <h3 class="text-xl mb-3">Deskripsi</h3>
    <p class="text-sm text-gray-600 leading-relaxed">
      Selain disibukkan dengan skripsi, Rangga, Ketua Panitia OSPEK Fakultas Kehutanan 2023 itu juga
      menyibukkan dirinya dengan mengagumi Andini. Seorang mahasiswi yang bercita-cita bisa mendaki Gunung
      Rinjani, sekaligus adik tingkat yang ia sebut sebagai manusia favorit. Andini dikelilingi oleh banyak
      cinta, banyak manusia yang ingin dengannya, terutama Rangga dengan seluruh kesan istimewanya. Namun,
      dalam dirinya, ada manusia dulu yang entah masih jadi pemenang atau definisi lain dari itu.
    </p>
  </div>
</div>


@endsection
