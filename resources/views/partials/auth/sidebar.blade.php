<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/assets/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8; width: 50px">
        <span class="brand-text font-weight-light ml-2">Zona Magang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a href="/admin" class="nav-link {{ $activeTab == 'dashboard' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th-large"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/peserta" class="nav-link {{ $activeTab == 'peserta' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Peserta
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/lowongan" class="nav-link {{ $activeTab == 'lowongan' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-bullhorn"></i>
                            <p>
                                Lowongan
                            </p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/user" class="nav-link {{ $activeTab == 'beranda' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th-large"></i>
                            <p>
                                Beranda
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/user/pendaftaran" class="nav-link {{ $activeTab == 'pendaftaran' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-paste"></i>
                            <p>
                                Pendaftaran
                            </p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="/{{ Auth::user()->role }}/profile"
                        class="nav-link {{ $activeTab == 'profile' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>

                <li class="nav-header">More</li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
