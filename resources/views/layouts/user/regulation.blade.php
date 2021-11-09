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
        <table class="table table-bordered table-hovered">
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
                        <a href="" class="btn btn-primary">Lihat Dokumen</a>
                        <a href="" class="btn btn-success">Unduh Dokumen</a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Perda</td>
                    <td>Ini deksripsi dokumen</td>
                    <td>
                        <a href="" class="btn btn-primary">Lihat Dokumen</a>
                        <a href="" class="btn btn-success">Unduh Dokumen</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</section><!-- End Blog Section -->

@endsection
