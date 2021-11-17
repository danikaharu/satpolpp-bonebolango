@extends('layouts.admin.master')

@section('title', 'Galeri Kegiatan | Admin Satpol PP Bone Bolango')

@section('content')
<div class="page-heading">
    <h3>Galeri Kegiatan</h3>
</div>

<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('galery.create') }}" class="btn btn-primary">Tambah Galeri</a>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table id="pengaduanTable" class="table table-hover table-responsive">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Judul Galeri</th>
                                <th>Isi Galeri</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeries as $item)

                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->title}}</td>
                                <td>{!! Str::limit($item->body,20) !!}</td>
                                <td>

                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('galery.destroy', $item->id) }}" method="POST">
                                        <a href="{{ Storage::url('galery/'.$item->image) }}" target="_blank" class="btn btn-sm btn-success my-2">Gambar</a>
                                        <a href="{{ route('galery.edit', $item->slug) }}" class="btn btn-sm btn-primary my-2">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger my-2">Hapus</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach ($galeries as $galeri)
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>



@endsection
