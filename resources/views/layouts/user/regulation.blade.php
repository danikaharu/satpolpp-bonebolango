@extends('layouts.user.master')

@section('title')Regulasi @endsection

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Regulasi</li>
        </ol>
        <h2>Regulasi</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section class="blog">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Satpol PP Kabupaten Bone Bolango</h2>
            <p>Regulasi</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                <article class="entry">

                    <h2 class="entry-title">
                        <a href="#">Nama Dokumen</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            Deskripsi Dokumen
                        </p>
                        <div class="read-more">
                            <a href="#"><i class="bi bi-eye me-2"></i>Lihat</a>
                            <a href="#"><i class="bi bi-download me-2"></i>Unduh</a>
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
<!-- End Blog Section -->

@endsection
