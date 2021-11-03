<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Admin Satpol PP Bonebol</title>

    {{-- Styles --}}
    @include('layouts.admin.partials.styles')
</head>

<body>
    <div id="app">
        @include('layouts.admin.partials.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('content')

            @include('layouts.admin.partials.footer')
        </div>
    </div>
    @include('layouts.admin.partials.scripts')
</body>

</html>
