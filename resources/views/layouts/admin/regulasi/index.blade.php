@extends('layouts.admin.master')

@section('title', 'Regulasi')

@section('content')
<ol class="breadcrumb mb-4">
    <h4>
        <li class="breadcrumb-item active">Regulasi</li>
    </h4>
</ol>

<a href="{{ route('regulation.create') }}" class="btn btn-primary mb-4">Tambah Regulasi</a>
<table id="pengaduanTable" class="table">
    <thead>
        <tr class="text-center">
            <th>No</th>
            {{-- <th>Document</th> --}}
            <th>Judul Regulasi</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($regulation as $v => $item)

        <tr class="text-center">
            <td>{{$v += 1}}</td>
            {{-- <td>
                <iframe src="{{ Storage::url('regulation/'.$item->document) }}" frameborder="0"
                    style="width:100%;min-height:250px;"></iframe>
            </td> --}}
            <td>{{$item->title}}</td>
            <td>{!! Str::limit($item->description,50) !!}</td>
            <td>

                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                    action="{{ route('regulation.destroy', $item->id) }}" method="POST">
                    <a href="{{ Storage::url('regulation/'.$item->document) }}" target="pdf-frame" class="btn btn-sm btn-info">Lihat</a>
                    {{-- <a href="{{ route('regulation.edit', $item->slug) }}" class="btn btn-sm btn-primary">EDIT</a> --}}
                    <a href="{{ route('regulation.edit', $item->slug) }}" class="btn btn-sm btn-primary">EDIT</a>
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