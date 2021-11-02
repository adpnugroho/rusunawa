<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="/">Rusunawa</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="{{Route::is('index') ? 'active' : '' }}" href="/">Beranda</a></li>
                <li><a class="{{Route::is('listRusunawa', 'detailRusunawa') ? 'active' : '' }}" href="/rusunawa">Rusunawa</a></li>
                <li><a class="{{Route::is('persyaratan') ? 'active' : '' }}" href="/persyaratan">Persyaratan</a></li>
                <li><a class="{{Route::is('pendaftaran', 'pendaftaranSelesai') ? 'active' : '' }}" href="/pendaftaran">Pendaftaran</a></li>
                <li><a class="{{Route::is('keluhan') ? 'active' : '' }}" href="/keluhan">Keluhan</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
