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
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Satpol PP Kabupaten Bone Bolango</h2>
            <p>Regulasi</p>
        </header>

        <table class="table table-hover table-responsive align-middle">
            <thead>
                <tr>
                    <td>No. </td>
                    <td>Nama Dokumen</td>
                    <td>Deskripsi</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Perda</td>
                    <td>Ini deksripsi dokumen</td>
                    <td>
                        <a href="" class="btn btn-primary my-2">Lihat Dokumen</a>
                        <a href="" class="btn btn-success my-2">Unduh Dokumen</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</section><!-- End Blog Section -->

@endsection
