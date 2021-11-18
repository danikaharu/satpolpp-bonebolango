@extends('layouts.user.master')

@section('title')Beranda @endsection

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Satpol PP Kabupaten Bone Bolango</h1>
                <h2 data-aos="fade-up">Kami adalah garda terdepan penegakan peraturan daerah Bone Bolango</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Selengkapnya</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('assets_user/img/hero.png') }}" class="img-fluid" alt="">
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
                        Selamat datang di Website Resmi SATPOL PP Kabupaten Bone Bolango. Website ini sebagai sarana
                        publikasi untuk memberikan Informasi dan gambaran tentang SATPOL PP Kab. Bone Bolango dalam
                        melaksanakan pelayanan informasi.
                    </p>
                    <div class="text-center text-lg-start">
                        <a href="#"
                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
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
                </div>
            </div>

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box orange">
                    <i class="ri-discuss-line icon"></i>
                    <h3>Bidang Ketertiban Umum Dan Ketentraman Masyarakat</h3>
                </div>
            </div>

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-box green">
                    <i class="ri-discuss-line icon"></i>
                    <h3>Bidang Perlindungan Masyarakat</h3>
                </div>
            </div>

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-box red">
                    <i class="ri-discuss-line icon"></i>
                    <h3>Bidang Sumber Daya Aparatur</h3>
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

            @foreach ($news as $data)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="{{ Storage::url('news/'.$data->image) }}" class="img-fluid" alt="">
                    </div>
                    <span class="post-date">{{ $data->created_at->format('d M Y H:i') }}</span>
                    <h3 class="post-title">{{ $data->title }}</h3>
                    <a href="{{ route('berita.detail', $data->slug) }}"
                        class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section><!-- End Recent Blog Posts Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Satpol PP Bone Bolango</h2>
            <p>Layanan Pengaduan</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-6">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p>Ulantha<br>Suwawa, Gorontalo</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-telephone"></i>
                            <h3>Telepon</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>info@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-clock"></i>
                            <h3>Jam Buka</h3>
                            <p>Senin - Jumat<br>8:00 - 05:00</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                {{-- <form action="{{ route('complaint.store') }}" method="post" class="php-email-form"> --}}
                    <form action="{{ route('complaint.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" placeholder="Nama">
                                @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="No. Telpon/WA">
                            </div> --}}

                            <div class="col-md-6 ">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" name="email" placeholder="Email">
                                @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Lokasi Kejadian">
                            </div> --}}

                            <div class="col-md-12">
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}" name="title" placeholder="Judul Aduan">
                                @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    value="{{ old('description') }}" name="description" rows="6"
                                    placeholder="Tuliskan Aduan Anda"></textarea>
                                @error('description')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- <div class="col-md-12">
                                <input type="file" class="form-control" name="subject">
                            </div> --}}

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
            </div>

        </div>

    </div>

</section><!-- End Contact Section -->

@endsection