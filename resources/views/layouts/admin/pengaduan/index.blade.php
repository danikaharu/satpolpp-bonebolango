@extends('layouts.admin.master')

@section('title', 'Pengaduan | Admin Satpol PP Bone Bolango')

@section('content')
<div class="page-heading">
    <h3>Pengaduan</h3>
</div>

<div class="page-content">
    <section class="content">
        <div class="card">
            <div class="card-content">
                <div class="table-responsive">
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
                            @foreach ($complaints as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ Illuminate\Support\Str::words(strip_tags($item->title) , 5) }}</td>
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
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
