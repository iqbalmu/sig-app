<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        {{-- <h1 class="logo me-auto"><a href="/">Presento<span>.</span></a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto"><img src="/assets/img/logo.png" alt="logo sig"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="/#hero">Beranda</a></li>
                <li><a class="nav-link scrollto" href="/#about">Tentang</a></li>
                <li><a class="nav-link scrollto" href="/#tabs">Tahapan</a></li>
                <li><a class="nav-link scrollto" href="/#services">Posisi</a></li>
                <li><a href="/lowongan">Lowongan</a></li>
                <li><a class="nav-link scrollto" href="/#faq">FAQ</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        @if (Auth::check())
            @if (Auth::user()->role === 'admin')
                <a href="/admin" class="get-started-btn scrollto">Dashboard</a>
            @else
                <a href="/user" class="get-started-btn scrollto">Beranda</a>
            @endif
        @else
            <a href="/auth/login" class="get-started-btn scrollto">Sign In</a>
        @endif
    </div>
</header>
