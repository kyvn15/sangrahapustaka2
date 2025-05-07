<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail</title>
    <link rel="stylesheet" href="{{ asset('assets/css/detailbuku.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
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
    <div class="breadcrumb">
        <a href="home.html" class="link">HOME</a> <span class="pembeda"> > </span> <a href="fiksi.html"
            class="link2">FIKSI</a>
    </div>
    <div class="content">
        <div class="book-cover">
            <img src="assets/img/3726.jpg" alt="3726 MDPL">
        </div>
        <div class="book-details">
            <h1>Nurwina Sari</h1>
            <h2>3726 MDPL</h2>
            <p class="price">Rp 89.500</p>

            <div class="book-meta">
                <p><strong>Penerbit:</strong> Romancius</p>
                <p><strong>Genre :</strong> Romantis</p>
                <p><strong>Tanggal Terbit:</strong> 12 Sep 2024</p>
                <div class="book-meta2">
                    <p><strong>ISBN:</strong> 9786233102599</p>
                    <p><strong>Halaman:</strong> 280</p>
                </div>
                <br>
                <div class="book-meta3">
                    <p><strong>Format Buku:</strong> <span class="softcover">SOFT COVER</span> <span
                            class="hardcover">HARD
                            COVER</span></p>
                </div>
            </div>
        </div>
        <div class="book-description">
            <h3>Deskripsi</h3>
            <p>Selain disibukkan dengan skripsi, Rangga, Ketua Panitia OSPEK Fakultas Kehutanan 2023 itu juga
                menyibukkan dirinya dengan mengagumi Andini. Seorang mahasiswi yang bercita-cita bisa mendaki Gunung
                Rinjani, sekaligus adik tingkat yang ia sebut sebagai manusia favorit. Andini dikelilingi oleh banyak
                cinta, banyak manusia yang ingin dengannya, terutama Rangga dengan seluruh kesan istimewanya. Namun,
                dalam dirinya, ada manusia dulu yang entah masih jadi pemenang atau definisi lain dari itu.</p>
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
