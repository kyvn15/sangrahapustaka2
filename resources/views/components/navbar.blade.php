<div>
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
</div>
