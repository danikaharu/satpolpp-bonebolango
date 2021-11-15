@extends('layouts.user.master')

@section('title')Artikel @endsection

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Artikel</li>
        </ol>
        <h2>Artikel</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">
                @foreach ($news as $data)
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ asset('assets_user/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="#">{{ $data->title }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $data->created_at->format('d M Y H:i') }}">{{ $data->created_at->format('d M Y H:i') }}</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            {{ Illuminate\Support\Str::words(strip_tags($data->body) , 50) }}
                        </p>
                        <div class="read-more">
                            <a href="#">Selengkapnya</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->
                @endforeach

                {{ $news->links('vendor.pagination.custom') }}

            </div><!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Berita Terkini</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach ($news as $data)
                        <div class="post-item clearfix">
                            <img src="{{ asset('assets_user/img/blog/blog-recent-1.jpg') }}" alt="">
                            <h4><a href="#">{{ $data->title }}</a></h4>
                            <time datetime="{{ $data->created_at->format('d M Y H:i') }}">{{ $data->created_at->format('d M Y H:i') }}</time>
                        </div>
                        @endforeach

                    </div><!-- End sidebar recent posts-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Section -->

@endsection
