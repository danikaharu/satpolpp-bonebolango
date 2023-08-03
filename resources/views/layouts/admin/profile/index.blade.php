@extends('layouts.admin.master')

@section('title')
    {{ $profile->title }}
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="page-heading">
        <h3>{{ $profile->title }}</h3>
    </div>

    <section class="section">
        <div class="page-content">
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

                    <a href="{{ route('profile.edit', $profile->slug) }}" class="btn btn-sm btn-primary" data-toggle="modal"
                        data-target=".bd-example-modal-lg">Edit</a>


                    {{-- modal edit --}}
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit {{ $profile->title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="{{ route('profile.update', $profile->slug) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label class="font-weight-bold">Judul</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                name="title" value="{{ old('title', $profile->title) }}"
                                                placeholder="Nama Instansi">

                                            <!-- error message untuk nama instansi -->
                                            @error('title')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold">Deskripsi</label>
                                            <textarea id="summernote" class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                                                placeholder="Masukan Deskripsi Instansi">{{ old('content', $profile->content) }}</textarea>

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
    </section>
@endsection


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                placeholder: 'Harap Masukan Isi Galeri Kegiatan',
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ],
            });
        });
    </script>
@endpush
