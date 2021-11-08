@extends('layouts.admin.master')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="page-heading">
        <h3>Dashboard {{ auth()->user()->username }}</h3>
    </div>
    <div class="page-content">
        <h1>Selamat Datang</h1>
    </div>
</div>
@endsection