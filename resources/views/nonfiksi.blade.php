<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/nonfiksi.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">SP.ID</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex">
                <input class="form-control me-2 custom-search" type="search" placeholder="Cari Produk, Judul Buku"
                    aria-label="Search">
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item navbarr">
                        <a class="nav-link" aria-current="page" href="{{ route('sangraha.index') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}">ABOUT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            KATEGORI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('fiksi.index') }}">FIKSI</a></li>
                            <li><a class="dropdown-item" href="{{ route('nonfiksi.index') }}">NON FIKSI</a></li>
                        </ul>
                    </li>
    </nav>

    <h1 class="judul">NONFIKSI</h1>

    <div class="category1">
        <div class="book-list">
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/sejarah.jpg" alt="Nikola Maldini">
                <h3><strong>Thomas Stamford</strong><br>SEJARAH JAWA JILID 2</h3>
                <p>Rp 116.600</p>
            </a>
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/prancis.jpg" alt="Senja di Alaska">
                <h3><strong>Dwi Adi Wicaksono</strong><br>Sejarah Peradaban Prancis</h3>
                <p>Rp 75.000</p>
            </a>
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/kuno.jpg" alt="Inside Out 2">
                <h3><strong>Andri Yanto</strong><br>Sejarah Peradaban Kuno di Empat Benua</h3>
                <p>Rp 50.000</p>
            </a>
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/muslim.png" alt="Tidak Jatuh Cinta">
                <h3><strong>Asep Rachmat Hidayat</strong><br>Sejarah Sosial Muslim Minoritas Etnis Melayu di Nusantara
                </h3>
                <p>Rp 64.400</p>
            </a>
        </div>
    </div>

    <div class="category2">
        <div class="book-list">
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/ipas.jpg" alt="Bandung After Rain">
                <h3><strong>Fajar Wahyudin</strong><br>Bukupas IPAS untuk SD/MI Kelas 3 Fase B</h3>
                <p>Rp 57.000</p>
            </a>
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/smp.jpg" alt="Ananta Prihadi">
                <h3><strong>Team Smart Academy</strong><br>Bukupas IPAS untuk SD/MI Kelas 3 Fase B</h3>
                <p>Rp 205.000</p>
            </a>
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/SMA.png" alt="3726 MDPL">
                <h3><strong>Team Smart Academy</strong><br>Modul Belajar Mandiri Matematika SMA/MA Kelas X, Xi, Xii</h3>
                <p>Rp 149.000</p>
            </a>
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/GURU.jpg" alt="My Favorite Person">
                <h3><strong>Anselmus</strong><br>Pengembangan Kurikulum</h3>
                <p>Rp 41.100</p>
            </a>
        </div>
    </div>

    <div class="category3">
        <div class="book-list">
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/resep.jpg" alt="Solo Leveling 6">
                <h3><strong>Majalah Gramedia</strong> <br>Majalah Kumpulan Resep Kue Kering Legendaris</h3>
                <p>Rp 85.000</p>
            </a>
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/makanan.jpg" alt="The Atala">
                <h3> <strong>CLARISSA NOVIANY</strong><br>Jago Masak ala Dapur Bekal - 50+ Resep Menu Sehari-hari</h3>
                <p>Rp 127.200</p>
            </a>
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/kue.jpg" alt="Respati">
                <h3><strong>Sylvia Norma Yunita</strong><br>30 Resep Kreasi Kue untuk Snack Box</h3>
                <p>Rp 79.600</p>
            </a>
            <a href="https://youtube.com" class="book-item">
                <img src="assets/img/minuman.jpg" alt="Eragon">
                <h3><strong>Aulia Puspita</strong><br>Minuman Seger! Bikin Ngiler!</h3>
                <p>Rp 25.700</p>
            </a>
        </div>
    </div>
    <footer class="footer mt-5 p-4 footerhome">
        <div class="container">
            <div class="row footerlist">
                <!-- Produk Sanghara Pustaka -->
                <div class="col-3">
                    <h5 class="fw-bold">PRODUK SANGHARA PUSTAKA</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{route ("fiksi.index")}}" class="text-decoration-none text-secondary">Fiksi</a></li>
                        <li><a href="{{route ("nonfiksi.index")}}" class="text-decoration-none text-secondary">Non Fiksi</a></li>
                    </ul>
                </div>
                <!-- Tentang Sanghara Pustaka -->
                <div class="col-3">
                    <h5 class="fw-bold">TENTANG SANGHARA PUSTAKA</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{route ("about.index")}}" class="text-decoration-none text-secondary">Tentang Kami</a></li>
                    </ul>
                </div>
                <!-- Lainnya -->
                <div class="col-2">
                    <h5 class="fw-bold">LAINNYA</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-secondary">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col d-flex justify-content-end">
                    <!-- Social Media Icons -->
                    <a href="https://wa.me/6285964209143?text=Halo%20saya%20mau%20tanya%20tentang%20produk%20anda
    "><img
                            src="assets/img/wa.png" alt="WhatsApp" class="social-icon"></a>
                    <a href="https://instagram.com/kayevanots"><img src="assets/img/ig.png" alt="Instagram"
                            class="social-icon"></a>
                    <a href="#"><img src="assets/img/fb.png" alt="Facebook" class="social-icon"></a>
                    <a href="#"><img src="assets/img/X.png" alt="Twitter" class="social-icon"></a>
                </div>
            </div>
            <!-- Garis Bawah -->
            <hr class="footer-line">
            <div class="row align-items-center">
                <div class="col-md-6 copyright">
                    <p>© 2024 PT Sangraha Pustaka</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
