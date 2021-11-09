<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets_user/img/logo.png') }}" alt="logo">
            <span>SATPOL PP</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="nav-link scrollto {{ request()->is('/') ? ' active' : '' }}">Beranda</a></li>
                <li class="dropdown"><a href="#" class="nav-link {{ request()->is('profil/*') ? ' active' : '' }}"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('profil') }}">Profil Instansi</a></li>
                        <li><a href="#">Struktur Organisasi</a></li>
                        <li><a href="#">Tugas Pokok & Fungsi</a></li>
                        <li><a href="#">Unit Kerja & Jabatan</a></li>
                        <li><a href="#">Visi & Misi</a></li>
                    </ul>
                </li>
                <li><a href="#">Regulasi</a></li>
                <li class="dropdown"><a href="#" class="nav-link {{ request()->is('berita') ? ' active' : '' }}"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('berita') }}">Berita</a></li>
                        <li><a href="#">Galeri Kegiatan</a></li>
                    </ul>
                </li>
                <li><a href="#">Pengaduan</a></li>
                <li><a class="getstarted" href="{{ route('login') }}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
