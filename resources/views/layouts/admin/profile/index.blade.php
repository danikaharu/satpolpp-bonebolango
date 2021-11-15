@extends('layouts.admin.master')

@section('title')
{{ $profile->title }}
@endsection

@section('content')
<ol class="breadcrumb mb-2">
    <h4>
        <li class="breadcrumb-item active fon">{{ $profile->title }}</li>
    </h4>
</ol>

<div class="container mt-2 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">

                    <div class="form-group">
                        <label class="font-weight-bold">Judul</label>
                        <p>{{ $profile->title }}</p>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <p>{!! $profile->content !!}</p>
                    </div>

                    <a href="{{ route('profile.edit',$profile->slug) }}" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">EDIT</a>


                    {{-- modal edit --}}
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="{{ route('profile.update', $profile->slug)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label class="font-weight-bold">Judul</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $profile->title) }}" placeholder="Nama Instansi">

                                            <!-- error message untuk nama instansi -->
                                            @error('title')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold">Deskripsi</label>
                                            <textarea id="summernote" class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukan Deskripsi Instansi">{{ old('content', $profile->content) }}</textarea>

                                            <!-- error message untuk description(isi) -->
                                            @error('content')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- batas modal edit --}}
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
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200
            , placeholder: 'Harap Masukan Isi Galeri Kegiatan'
            , toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']]
                , ['font', ['strikethrough', 'superscript', 'subscript']]
                , ['fontsize', ['fontsize']]
                , ['color', ['color']]
                , ['para', ['ul', 'ol', 'paragraph']]
                , ['height', ['height']]
            ]
        , });
    });

</script>

@endpush
