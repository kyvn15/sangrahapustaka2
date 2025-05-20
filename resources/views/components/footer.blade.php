<footer class="bg-[#F0EDED] mt-5 px-4 py-6">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-wrap justify-between text-sm text-gray-700">

      <!-- Produk -->
      <div class="w-full sm:w-1/2 md:w-1/4 mb-6">
        <h5 class="font-bold text-[15px] mb-2">PRODUK SANGHARA PUSTAKA</h5>
        <ul class="space-y-1">
          <li>
            <a href="{{ route('fiksi.index') }}" class="text-gray-600 hover:text-gray-800">Fiksi</a>
          </li>
          <li>
            <a href="{{ route('nonfiksi.index') }}" class="text-gray-600 hover:text-gray-800">Non Fiksi</a>
          </li>
        </ul>
      </div>

      <!-- Tentang -->
      <div class="w-full sm:w-1/2 md:w-1/4 mb-6">
        <h5 class="font-bold text-[15px] mb-2">TENTANG SANGHARA PUSTAKA</h5>
        <ul class="space-y-1">
          <li>
            <a href="{{ route('about.index') }}" class="text-gray-600 hover:text-gray-800">Tentang Kami</a>
          </li>
        </ul>
      </div>

      <!-- Lainnya -->
      <div class="w-full sm:w-1/2 md:w-1/6 mb-6">
        <h5 class="font-bold text-[15px] mb-2">LAINNYA</h5>
        <ul class="space-y-1">
          <li>
            <a href="#" class="text-gray-600 hover:text-gray-800">Hubungi Kami</a>
          </li>
        </ul>
      </div>

      <!-- Sosmed -->
      <div class="w-full sm:w-auto flex items-start sm:justify-end gap-4 mt-2">
        <a href="https://wa.me/6285964209143?text=Halo%20saya%20mau%20tanya%20tentang%20produk%20anda">
          <img src="assets/img/wa.png" alt="WhatsApp" class="w-6 h-6 hover:opacity-70" />
        </a>
        <a href="https://instagram.com/kayevanots">
          <img src="assets/img/ig.png" alt="Instagram" class="w-6 h-6 hover:opacity-70" />
        </a>
        <a href="#">
          <img src="assets/img/fb.png" alt="Facebook" class="w-6 h-6 hover:opacity-70" />
        </a>
        <a href="#">
          <img src="assets/img/X.png" alt="Twitter" class="w-6 h-6 hover:opacity-70" />
        </a>
      </div>
    </div>

    <!-- Garis -->
    <hr class="border-t border-gray-800 my-5" />

    <!-- Copyright -->
    <div class="text-sm text-gray-700">
      <p>© 2024 PT Sangraha Pustaka</p>
    </div>
  </div>
</footer>
