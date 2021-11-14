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
<section class="blog">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Satpol PP Kabupaten Bone Bolango</h2>
            <p>Berita</p>
        </header>

        <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry">
                    @foreach ($news as $data )
                    <div class="entry-img">
                        <img src="{{ Storage::url('news/'.$data->image) }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="#">{!! Str::words($data->title,5) !!}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{ $data->created_at->format('d M Y') }}</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        {!! Str::limit($data->body, 300) !!}
                        <div class="read-more">
                            <a href="#">Selengkapnya</a>
                        </div>
                    </div>
                    @endforeach
                </article><!-- End blog entry -->

                {{-- @if ($news->isEmpty())
                <h2>Maaf, data belum ada</h2>
                @else
               
                @endif --}}

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
                        <div class="post-item clearfix">
                            <img src="{{ asset('assets_user/img/blog/blog-recent-1.jpg') }}" alt="">
                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('assets_user/img/blog/blog-recent-2.jpg') }}" alt="">
                            <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('assets_user/img/blog/blog-recent-3.jpg') }}" alt="">
                            <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('assets_user/img/blog/blog-recent-4.jpg') }}" alt="">
                            <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('assets_user/img/blog/blog-recent-5.jpg') }}" alt="">
                            <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                    </div><!-- End sidebar recent posts-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Section -->

@endsection
