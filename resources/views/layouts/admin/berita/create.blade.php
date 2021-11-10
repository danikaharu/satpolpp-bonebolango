@extends('layouts.admin.master')

@section('title', 'Berita')

@section('content')
<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('galery.index') }}">Berita</a>
        </li>
        <li class="breadcrumb-item active fon">Tambah Berita</li>
</ol>
@endsection
