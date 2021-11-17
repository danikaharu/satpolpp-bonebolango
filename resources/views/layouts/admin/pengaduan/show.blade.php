@extends('layouts.admin.master')

@section('title', 'Pengaduan | Admin Satpol PP Bone Bolango')

@section('content')

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">
        <a href="{{ route('complaint.index') }}">Pengaduan</a>
    </li>
    <li class="breadcrumb-item active fon">Detail Pengaduan</li>
</ol>

<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Pengaduan
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama Pengadu</th>
                            <td>:</td>
                            <td>{{ $complaints->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $complaints->email  }}</td>
                        </tr>
                        <tr>
                            <th>Judul Pengaduan</th>
                            <td>:</td>
                            <td>{{ $complaints->title }}</td>
                        </tr>
                        <tr>
                            <th>Isi Pengaduan</th>
                            <td>:</td>
                            <td>{{ $complaints->description }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>
                                @if ($complaints->status =='0')
                                <a href="#" class="badge badge-danger">Pending</a>
                                @elseif ($pengaduan->status == 'proses')
                                <a href="#" class="badge badge-warning text-white">Proses</a>
                                @else
                                <a href="#" class="badge badge-success">Selesai</a>
                                @endif
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Tanggapan Petugas
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="pengaduan_id" value="">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div class="input-group mb-3">
                            <select name="status" id="status" class="custom-select">
                                @if ($complaints->status=='0')
                                <option selected value="0">Pending</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                @elseif ($complaints->status=='proses')
                                <option value="0">Pending</option>
                                <option selected value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                @else
                                <option value="0">Pending</option>
                                <option value="proses">Proses</option>
                                <option selected value="selesai">Selesai</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggapan">Tanggapan</label>
                        <textarea name="tanggapan" id="tanggapan" rows="4" class="form-control"
                            placeholder="Belum ada Tanggapan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-purple">KIRIM</button>
                </form>
                @if (Session::has('status'))
                <div class="alert alert-success mt-2">
                    {{ Session::get('status') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection