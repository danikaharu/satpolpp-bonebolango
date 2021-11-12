@extends('layouts.admin.master')

@section('title', 'Berita')

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">
        <a href="{{ route('news.index') }}">Berita</a>
    </li>
    <li class="breadcrumb-item active">Tambah Berita</li>
</ol>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">Judul Berita</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                value="{{ old('title') }}" placeholder="Masukan Judul Berita">

                            <!-- error message untuk title -->
                            @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Isi Berita</label>
                            <textarea id="summernote" class="form-control @error('body') is-invalid @enderror"
                                name="body" rows="4" placeholder="Masukan Isi Berita">{{ old('body') }}</textarea>

                            <!-- error message untuk body(isi) -->
                            @error('body')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

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
@push('styles')
<link rel="stylesheet" href="{{ asset('assets_admin/summernote/summernote.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets_admin/summernote/summernote.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#summernote').summernote({
            height: 300,
            placeholder: 'Harap Masukan Isi Berita',
            insertText: 'Hello World'
        });
    });
</script>

@endpush