<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('img/logo-ppkdjp.png') }}" class="navbar-brand bg-light" style="border-radius: 50%"
                    height="55" />
                <span class="navbar-brand mx-3 text-light d-flex fs-5">Admin PPKD</span>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="{{ route('admin.dashboard') }}" class="collapsed"
                        aria-expanded="false">
                        <i class="fa-solid fa-house"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                @if (Auth::user()->id_level == 1)
                    <li class="nav-item {{ Request::routeIs('user.index', 'user.create', 'user.edit') ? 'active' : '' }}">
                        <a href="{{ route('user.index') }}">
                            <i class="fa-solid fa-person"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('level.index', 'level.create', 'level.edit') ? 'active' : '' }}">
                        <a href="{{ route('level.index') }}">
                            <i class="fas fa-layer-group"></i>
                            <p>Level</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('jurusan.index', 'jurusan.create', 'jurusan.edit') ? 'active' : '' }}">
                        <a href="{{ route('jurusan.index') }}">
                            <i class="fa-solid fa-book"></i>
                            <p>Jurusan</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('peserta-pelatihan.index', 'peserta-pelatihan.create', 'peserta-pelatihan.edit') ? 'active' : '' }}">
                        <a href="{{ route('peserta-pelatihan.index') }}">
                            <i class="fa-solid fa-people-group"></i>
                            <p>Peserta Pelatihan</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('gelombang.index', 'gelombang.create', 'gelombang.edit') ? 'active' : '' }}">
                        <a href="{{ route('gelombang.index') }}">
                            <i class="fa-solid fa-wave-square"></i>
                            <p>Gelombang</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('user-jurusan.index', 'user-jurusan.create') ? 'active' : '' }}">
                        <a href="{{ route('user-jurusan.index') }}">
                            <i class="fa-solid fa-user"></i>
                            <p>User Jurusan</p>
                        </a>
                    </li>
                @elseif (Auth::user()->id_level == 2)
                    <li class="nav-item {{ Request::routeIs('jurusan.index', 'jurusan.create', 'jurusan.edit') ? 'active' : '' }}">
                        <a href="{{ route('jurusan.index') }}">
                            <i class="fa-solid fa-book"></i>
                            <p>Jurusan</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('peserta-pelatihan.index', 'peserta-pelatihan.create', 'peserta-pelatihan.edit') ? 'active' : '' }}">
                        <a href="{{ route('peserta-pelatihan.index') }}">
                            <i class="fa-solid fa-people-group"></i>
                            <p>Peserta Pelatihan</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('gelombang.index', 'gelombang.create', 'gelombang.edit') ? 'active' : '' }}">
                        <a href="{{ route('gelombang.index') }}">
                            <i class="fa-solid fa-wave-square"></i>
                            <p>Gelombang</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item {{ Request::routeIs('peserta-pelatihan.index', 'peserta-pelatihan.create', 'peserta-pelatihan.edit') ? 'active' : '' }}">
                        <a href="{{ route('peserta-pelatihan.index') }}">
                            <i class="fa-solid fa-people-group"></i>
                            <p>Peserta Pelatihan</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
