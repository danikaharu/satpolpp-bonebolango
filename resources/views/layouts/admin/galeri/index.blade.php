@extends('layouts.admin.master')

@section('title', 'Galeri Kegiatan | Admin Satpol PP Bone Bolango')

@section('content')

<ol class="breadcrumb mb-4">
    <h4>
        <li class="breadcrumb-item active fon">Galeri Kegiatan</li>
    </h4>
</ol>

<a href="{{ route('galery.create') }}" class="btn btn-primary mb-4">Tambah Galeri</a>
<table id="pengaduanTable" class="table">
    <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Gambar</th>
            <th>Judul Galeri</th>
            <th>Isi Galeri</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($galeries as $v => $item)

        <tr class="text-center">
            <td>{{$v += 1}}</td>
            <td>
                <img src="{{ Storage::url('galery/'.$item->image) }}" class="rounded" style="height: 150px">
            </td>
            <td>{{$item->title}}</td>
            <td>{!! Str::limit($item->body,20) !!}</td>
            <td>

                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('galery.destroy', $item->id) }}" method="POST">
                    <a href="{{ route('galery.edit', $item->slug) }}" class="btn btn-sm btn-primary">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                </form>

            </td>
        </tr>
        @endforeach ($galeries as $galeri)
    </tbody>
</table>


@endsection
