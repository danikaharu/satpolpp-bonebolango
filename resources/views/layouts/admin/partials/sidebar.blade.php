<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
                        <h4>
                            <i class="bi bi-person-circle"></i>
                            {{ auth()->user()->name }}
                        </h4>

                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->is('admin') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Konten Website</li>

                <li class="sidebar-item {{ request()->is('admin/profile*') ? 'active' : '' }} has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Profil</span>
                    </a>
                    <ul class="submenu {{ request()->is('admin/profile*') ? 'active' : '' }}  ">
                        @foreach ($profile as $data)
                        <li class="submenu-item">
                            <a href="{{ route('profile.show', $data->slug) }}">{{ $data->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>

                <li class="sidebar-item {{ request()->is('admin/regulation*') ? 'active' : '' }} ">
                    <a href="{{ route('regulation.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-ruled-fill"></i>
                        <span>Regulasi</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('admin/galery*') ? 'active' : '' }} ">
                    <a href="{{ route('galery.index') }}" class='sidebar-link'>
                        <i class="bi bi-image-fill"></i>
                        <span>Galeri Kegiatan</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('admin/news*') ? 'active' : '' }}  ">
                    <a href="{{ route('news.index') }}" class='sidebar-link'>
                        <i class="bi bi-newspaper"></i>
                        <span>Berita</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('admin/complaint*') ? 'active' : '' }}   ">
                    <a href="{{ route('complaint.index') }}" class='sidebar-link'>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Pengaduan</span>
                    </a>
                </li>

                <hr>

                {{-- Selesai Fungsi Logout--}}
                <li class="sidebar-item  ">
                    <form action="{{ route('admin.logout') }}" method="post">
                        @csrf
                        <button type="submit" class="sidebar-link btn btn-light">
                            <i class="bi bi-box-arrow-right text-danger"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
