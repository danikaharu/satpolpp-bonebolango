@extends('layouts.admin.master')

@section('title', 'Regulasi | Admin Satpol PP Bone Bolango')

@section('content')
<div class="page-heading">
    <h3>Regulasi</h3>
</div>

<div class="page-content">
    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('regulation.create') }}" class="btn btn-primary mb-4">Tambah Regulasi</a>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table id="pengaduanTable" class="table">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Judul Regulasi</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($regulation as $item)

                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->title}}</td>
                                <td>{!! Str::limit($item->description,20) !!}</td>
                                <td>

                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('regulation.destroy', $item->id) }}" method="POST">
                                        <a href="{{ Storage::url('regulation/'.$item->document) }}" target="pdf-frame" class="btn btn-sm btn-success my-2">Dokumen</a>
                                        <a href="{{ route('regulation.edit', $item->slug) }}" class="btn btn-sm btn-primary my-2">Edit</a>
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
