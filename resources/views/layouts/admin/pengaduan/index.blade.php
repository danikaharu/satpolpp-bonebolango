@extends('layouts.admin.master')

@section('title', 'Pengaduan | Admin Satpol PP Bone Bolango')

@section('content')

<ol class="breadcrumb mb-4">
    <h4>
        <li class="breadcrumb-item active fon">Pengaduan</li>
    </h4>
</ol>

<table id="pengaduanTable" class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pengadu</th>
            <th>Email</th>
            <th>Judul Pengaduan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($complaints as $k => $item)
        <tr>
            <td>{{ $k += 1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->title }}</td>
            <td>
                @if ($item->status =='0')
                <div class="btn btn-sm btn-danger">Menunggu Tanggapan</div>
                @elseif ($item->status == '1')
                <div class="btn btn-sm btn-warning">Dalam Tindakan</div>
                @else
                <div class="btn btn-sm btn-success">Selesai</a>
                    @endif
            </td>
            <td>
                {{-- <form action="{{ route('complaint.destroy', $complaint->slug) }}" method="POST">
                    <a href="{{ route('complaint.show', $item->slug) }}" class="btn btn-sm btn-primary">Lihat</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                </form> --}}
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('complaint.destroy', $item->id) }}" method="POST">
                    <a href="{{ route('complaint.show', $item->slug) }}" class="btn btn-sm btn-primary">Lihat</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger my-2">Hapus</button>
                </form>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>


@endsection