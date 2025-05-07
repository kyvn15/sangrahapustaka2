<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <title>SANGRAHA PUSTAKA</title>
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
                        <a class="nav-link" aria-current="page" href="{{route ("sangraha.index")}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ("about.index")}}">ABOUT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            KATEGORI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ("fiksi.index")}}">FIKSI</a></li>
                            <li><a class="dropdown-item" href="{{route ("nonfiksi.index")}}">NON FIKSI</a></li>
                        </ul>
                    </li>
                    <div class="auth-buttons">
                        <a href="{{route ("login.index")}}" class="login">Masuk</a>
                        <a href="{{route ("signup.index")}}" class="register">Daftar</a>
                    </div>
    </nav>

    <div class="container p-5 namebrand">
        <h1 class="brand">Sangraha Pustaka</h1>
        <p>( KATALOG KUMPULAN BUKU FIKSI & NON FIKSI )</p>

    </div>
    <hr class="linebrand">
    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <div class="promo-banner">
                    <img src="{{ asset('assets/img/banner.jpg') }}" class="img-fluid" alt="Promo Banner">
                </div>
            </div>
        </div>
    </div>
    <div class="buku-terlaris-section">
        <h1>Buku Terlaris</h1>
        <div class="buku-terlaris-container">
            <div class="buku-terlaris-image">
                <img src="assets/img/banner2.webp" alt="Buku Terlaris Image">
            </div>
            <div class="buku-terlaris-slider">
                <a href="https://youtube.com" class="book-item">
                    <img src="assets/img/yellowface.jpg" alt="Yellowface">
                    <h3>R.F. KUANG<br>YELLOWFACE</h3>
                    <p>Rp 95.500</p>
                </a>
                <a href="{{route ("detailbuku.index")}}" class="book-item">
                    <img src="assets/img/3726.jpg" alt="3726 MDPL">
                    <h3>Nurwina Sari.<br>3726 MDPL</h3>
                    <p>Rp 90.500</p>
                </a>
                <a href="https://youtube.com" class="book-item">
                    <img src="assets/img/bandung.jpg" alt="Bandung After Rain">
                    <h3>Wulan Nur Amalia<br>BANDUNG AFTER RAIN</h3>
                    <p>Rp 99.500</p>
                </a>
                <a href="https://youtube.com" class="book-item">
                    <img src="assets/img/ananta.jpg" alt="Ananta Prihadi">
                    <h3>Risa Saraswati<br>ANANTA PRIHADI</h3>
                    <p>Rp 65.300</p>
                </a>
            </div>
        </div>
    </div>

    <footer class="footer mt-5 p-4 footerhome">
        <div class="container">
            <div class="row footerlist">
                <!-- Produk Sanghara Pustaka -->
                <div class="col-3">
                    <h5 class="fw-bold">PRODUK SANGHARA PUSTAKA</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('fiksi.index') }}" class="text-decoration-none text-secondary">Fiksi</a>
                        </li>
                        <li><a href="{{ route('nonfiksi.index') }}" class="text-decoration-none text-secondary">Non
                                Fiksi</a></li>
                    </ul>
                </div>
                <!-- Tentang Sanghara Pustaka -->
                <div class="col-3">
                    <h5 class="fw-bold">TENTANG SANGHARA PUSTAKA</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about.index') }}" class="text-decoration-none text-secondary">Tentang
                                Kami</a></li>
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
                    <a
                        href="https://wa.me/6285964209143?text=Halo%20saya%20mau%20tanya%20tentang%20produk%20anda
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
