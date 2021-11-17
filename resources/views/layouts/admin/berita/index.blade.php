@extends('layouts.admin.master')

@section('title', 'Berita | Admin Satpol PP Bone Bolango')

@section('content')
<div class="page-heading">
    <h3>Berita</h3>
</div>

<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('news.create') }}" class="btn btn-primary mb-4">Tambah Berita</a>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table class="table table-hover" id="pengaduanTable">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Judul Berita</th>
                                <th>Isi Berita</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $item)

                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$item->title}}</td>
                                <td>{!!Str::limit($item->body,20)!!}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('news.destroy', $item->id) }}" method="POST">
                                        <a href="{{ Storage::url('news/'.$item->image) }}" target="_blank" class="btn btn-sm btn-success my-2">Gambar</a>
                                        <a href="{{ route('news.edit', $item->slug) }}" class="btn btn-sm btn-primary my-2">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger my-2">Hapus</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach ($news as $item)
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
