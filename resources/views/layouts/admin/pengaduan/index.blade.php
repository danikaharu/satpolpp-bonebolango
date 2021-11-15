@extends('layouts.admin.master')

@section('title', 'Pengaduan')

@section('content')
<div class="page-heading">
    <h3>Pengaduan</h3>
</div>
<div class="page-content">
    <h1>Halaman Pengaduan</h1>
    <table id="pengaduanTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengadu</th>
                <th>Email</th>
                <th>Judul Pengaduan</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($complaint as $k => $item)
            <tr>
                <td>{{ $k += 1 }}</td>
                {{-- <td>?no</td> --}}
                {{-- <td>{{ $v->tgl_pengaduan->format('d-M-Y') }}</td> --}}
                {{-- <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->title }}</td> --}}
                {{-- <td>?status</td> --}}
                {{-- <td><a href="{{ route('pengaduan.show', $v->pengaduan_id) }}" style="text-decoration: underline">Lihat</a></td> --}}
                {{-- <td>?detail</td> --}}
            </tr>
    
            @endforeach
    
        </tbody>
    </table>
</div>
@endsection
