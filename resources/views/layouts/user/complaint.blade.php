@extends('layouts.user.master')

@section('title')Pengaduan @endsection

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Pengaduan</li>
        </ol>
        <h2>Pengaduan</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Pengaduan Section ======= -->
<section class="blog">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Satpol PP Kabupaten Bone Bolango</h2>
            <p>Pengaduan</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                <article class="entry">

                    <h2 class="entry-title">
                        <a href="#">Judul Laporan</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Pelapor</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time>Jan 1, 2020</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            Deskripsi Laporan
                        </p>
                        <div class="read-more">
                            <a href="#">Selengkapnya</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->

            </div>


        </div>

        <div class="blog-pagination">
            <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </div>

    </div>

</section>
<!-- End Pengaduan Section -->

@endsection
