<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
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
    <x-navbar2></x-navbar2>

    <div class="about-us-section">
        <div class="content">
            <div class="image">
                <img src="assets/img/sangraha.jpg" alt="Sangraha Pustaka Logo">
            </div>
            <div class="text">
                <h1>About Us</h1>
                <p>Sangraha Pustaka, yang berdiri sejak tanggal 15 November 2023, merupakan sebuah platform online yang
                    fokus pada penjualan buku-buku terlaris dari berbagai genre. Dengan semangat untuk menyediakan akses
                    mudah dan cepat bagi para pencinta literasi, kami menghadirkan beragam pilihan buku yang
                    berkualitas, mulai dari fiksi hingga non-fiksi, yang telah terbukti menjadi favorit banyak pembaca.
                    Kami percaya bahwa setiap buku memiliki kekuatan untuk menginspirasi, mendidik, dan membawa
                    perubahan bagi para pembacanya.</p>
                <p>Nama Sangraha Pustaka diambil dari kata "Sangraha" yang bermakna kumpulan atau koleksi, serta
                    "Pustaka" yang berarti buku atau literatur. Filosofi ini mencerminkan visi kami untuk menjadi tempat
                    yang terpercaya dalam menyediakan koleksi buku terbaik bagi semua kalangan. Melalui Sangraha
                    Pustaka, kami ingin membangun budaya membaca yang lebih kuat dan menjadi sahabat terbaik bagi mereka
                    yang haus akan pengetahuan dan inspirasi melalui buku.</p>
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
