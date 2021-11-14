@extends('layouts.admin.master')

@section('title', 'Visi Misi')

@section('content')
<ol class="breadcrumb mb-2">
    <h4>
        <li class="breadcrumb-item active fon">Visi dan Misi</li>
    </h4>
</ol>

<div class="container mt-2 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">

                    <div class="form-group">
                        <label class="font-weight-bold">Visi</label>
                        <p>{!! $profiles->title !!}</p>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Misi</label>
                        <p>{!! $profiles->content !!}</p>
                    </div>

                    <a href="{{ route('visionmission.edit', $profiles->id) }}" class="btn btn-sm btn-primary"
                        data-toggle="modal" data-target=".bd-example-modal-lg">EDIT</a>

                    {{-- modal edit --}}
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Visi Misi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="{{ route('visionmission.update', $profiles->id)}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label class="font-weight-bold">Visi</label>
                                            <textarea id="summernote"
                                                class="form-control @error('title') is-invalid @enderror"
                                                name="title" rows="5"
                                                placeholder="Visi Instansi">{{ old('title', $profiles->title) }}</textarea>

                                            <!-- error message untuk description(isi) -->
                                            @error('title')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold">Misi</label>
                                            <textarea id="summernote1"
                                                class="form-control @error('content') is-invalid @enderror"
                                                name="content" rows="5"
                                                placeholder="Masukan Deskripsi Instansi">{{ old('content', $profiles->content) }}</textarea>

                                            <!-- error message untuk description(isi) -->
                                            @error('content')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
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
    $(document).ready(function(){
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
        $('#summernote1').summernote({
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