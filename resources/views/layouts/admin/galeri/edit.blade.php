@extends('layouts.admin.master')

@section('title', 'Galeri Kegiatan')

@section('content')
<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('galery.index') }}">Galeri</a>
        </li>
        <li class="breadcrumb-item active fon">Edit Galeri</li>
</ol>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('galery.update', $galery->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="font-weight-bold">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $galery->title) }}" placeholder="Judul Galeri Kegiatan">
                        
                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Isi</label>
                            <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="5" placeholder="Isi Galeri Kegiatan">{{ old('body', $galery->body) }}</textarea>
                        
                            <!-- error message untuk body(isi) -->
                            @error('body')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="font-weight-bold">Gambar</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image', $galery->image) }}">
                        
                            <!-- error message untuk title -->
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
