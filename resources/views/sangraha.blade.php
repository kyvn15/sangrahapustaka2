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
    <x-navbar></x-navbar>

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
                <a href="{{ route('detailbuku.index') }}" class="book-item">
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

    <x-footer></x-footer>

</body>

</html>
