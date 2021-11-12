@extends('layouts.admin.master')

@section('title', 'Berita')

@section('content')
<ol class="breadcrumb mb-4">
    <h4>
        <li class="breadcrumb-item active">Berita</li>
    </h4>
</ol>

<a href="{{ route('news.create') }}" class="btn btn-primary mb-4">Tambah Berita</a>
<table id="pengaduanTable" class="table">
    <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Gambar</th>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $v => $item)

        <tr class="text-center">
            <td>{{$v += 1}}</td>
            <td>
                <img src="{{ Storage::url('news/'.$item->image) }}" class="rounded" style="height: 150px">
            </td>
            <td>{{$item->title}}</td>
            <td>{!!Str::limit($item->body,20)!!}</td>
            <td>
                
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('news.destroy', $item->id) }}" method="POST">
                    <a href="{{ route('news.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                </form>

            </td>
        </tr>
        @endforeach ($news as $item)
    </tbody>
</table>
@endsection
