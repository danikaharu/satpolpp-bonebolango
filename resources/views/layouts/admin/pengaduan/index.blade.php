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
            {{-- <th>Isi Pengaduan</th> --}}
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
            {{-- <td>{{ Str::limit($item->description, 20) }}</td> --}}
            <td>
                @if ($item->status =='0')
                    <div class="badge rounded-pill bg-danger text-white">Pending</div>
                @elseif ($v->status == 'proses')
                    <div class="badge bg-warning text-white">Proses</div>
                @else
                    <div class="badge bg-success">Selesai</a>
                @endif
            </td>
            {{-- <td><a href="{{ route('pengaduan.show', $item->pengaduan_id) }}" style="text-decoration: underline">Lihat</a></td> --}}
            <td><a href="{{ route('complaint.show', $item->complaint_id) }}" class="btn btn-sm btn-primary">Lihat</a></td>
        </tr>

        @endforeach

    </tbody>
</table>


@endsection