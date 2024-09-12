<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('template/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand"
                    class="navbar-brand" height="20" />
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
                <li class="nav-item {{ Request::routeIs('user.index') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('level.index') ? 'active' : '' }}">
                    <a href="{{ route('level.index') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Level</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('jurusan.index') ? 'active' : '' }}">
                    <a href="{{ route('jurusan.index') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Jurusan</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('peserta-pelatihan.index') ? 'active' : '' }}">
                    <a href="{{ route('peserta-pelatihan.index') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Peserta Pelatihan</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('gelombang.index') ? 'active' : '' }}">
                    <a href="{{ route('gelombang.index') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Gelombang</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
