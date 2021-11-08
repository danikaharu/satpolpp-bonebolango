@extends('layouts.user.master')

@section('title')Beranda @endsection

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Selengkapnya</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('assets_user/img/hero-img.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">

    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>Selayang Pandang</h3>
                    <h2>Satuan Polisi Pamong Praja Kab. Bone Bolango</h2>
                    <p>
                        Selamat datang di Website Resmi SATPOL PP Kabupaten Bone Bolango. Website ini sebagai sarana publikasi untuk memberikan Informasi dan gambaran tentang SATPOL PP Kab. Bone Bolango dalam melaksanakan pelayanan informasi.
                    </p>
                    <div class="text-center text-lg-start">
                        <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Selengkapnya</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('assets_user/img/about.jpg') }}" class="img-fluid" alt="">
            </div>

        </div>
    </div>

</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Satpol PP Kabupaten Bone Bolango</h2>
            <p>Layanan Publik</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box blue">
                    <i class="ri-discuss-line icon"></i>
                    <h3>Bidang Penegakan Peraturan Perundang Undangan Daerah</h3>
                    <a href="#" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box orange">
                    <i class="ri-discuss-line icon"></i>
                    <h3>Bidang Ketertiban Umum Dan Ketentraman Masyarakat</h3>
                    <a href="#" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-box green">
                    <i class="ri-discuss-line icon"></i>
                    <h3>Bidang Perlindungan Masyarakat</h3>
                    <a href="#" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-box red">
                    <i class="ri-discuss-line icon"></i>
                    <h3>Bidang Sumber Daya Aparatur</h3>
                    <a href="#" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>

</section><!-- End Services Section -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Satpol PP Kabupaten Bone Bolango</h2>
            <p>Berita Terbaru</p>
        </header>

        <div class="row">

            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="{{ asset('assets_user/img/blog/blog-1.jpg') }}" class="img-fluid" alt=""></div>
                    <span class="post-date">Tue, September 15</span>
                    <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
                    <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="{{ asset('assets_user/img/blog/blog-2.jpg') }}" class="img-fluid" alt=""></div>
                    <span class="post-date">Fri, August 28</span>
                    <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                    <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="{{ asset('assets_user/img/blog/blog-3.jpg') }}" class="img-fluid" alt=""></div>
                    <span class="post-date">Mon, July 11</span>
                    <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                    <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Recent Blog Posts Section -->

@endsection