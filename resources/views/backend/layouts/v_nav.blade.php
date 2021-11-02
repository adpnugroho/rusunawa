<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @isset(Auth::user()->foto_profil)
                    <img src="{{ Storage::url(Auth::user()->foto_profil) }}" class="avatar-img rounded-circle">
                    @else
                    <img src="/storage/default/user-default.jpeg" class="avatar-img rounded-circle">
                    @endisset
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{Auth::user()->name}}
                            <span class="user-level">
                                @if (auth()->user()->level==1)
                                Administrator
                                @elseif (auth()->user()->level==2)
                                Pengelola
                                @endif
                            </span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{Route::is('dashboard') ? 'active' : '' }}">
                    <a href="/admin">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (auth()->user()->level == 1)
                <li class="nav-item {{Route::is('users.index', 'users.create', 'users.show', 'users.edit') ? 'active' : '' }}">
                    <a href="/admin/users">
                        <i class="fas fa-user"></i>
                        <p>Data Pengelola</p>
                    </a>
                </li>
                @elseif (auth()->user()->level == 2)
                <li class="nav-item {{Route::is('keluhan.index') ? 'active' : '' }}">
                    <a href="/admin/keluhan/">
                        <i class="fas fa-user-times"></i>
                        <p>Data Keluhan
                             @if($keluhan_navbar->count() > 0)
                            <span class="badge badge-danger">
                                {{ $keluhan_navbar->count() }}
                            </span>
                            @endif
                        </p>
                    </a>
                </li>
                <li class="nav-item {{Route::is('pendaftaran.index') ? 'active' : '' }}">
                    <a href="/admin/pendaftaran/">
                        <i class="fas fa-address-card"></i>
                        <p>Data Pendaftaran
                            @if($pendaftaran_navbar->count() > 0)
                            <span class="badge badge-danger">
                                {{ $pendaftaran_navbar->count() }}
                            </span>
                            @endif
                        </p>
                    </a>
                </li>
                <li class="nav-item {{Route::is('fasilitas.index') ? 'active' : '' }}">
                    <a href="/admin/fasilitas">
                        <i class="fas fa-check-square"></i>
                        <p>Data Fasilitas</p>
                    </a>
                </li>
                <li class="nav-item {{Route::is('gedung.index', 'gedung.create', 'gedung.edit') ? 'active' : '' }}">
                    <a href="/admin/gedung">
                        <i class="fas fa-building"></i>
                        <p>Data Gedung</p>
                    </a>
                </li>
                <li class="nav-item {{Route::is('persyaratan.edit') ? 'active' : '' }}">
                    <a href="/admin/persyaratan/1/edit">
                        <i class="fas fa-list"></i>
                        <p>Halaman Persyaratan</p>
                    </a>
                </li>
                <li class="nav-item {{Route::is('laporanKeluhan') ? 'active' : '' }}">
                    <a href="/admin/laporan/keluhan">
                        <i class="fas fa-file-alt"></i>
                        <p>Laporan Keluhan</p>
                    </a>
                </li>
                <li class="nav-item {{Route::is('laporanPendaftaran') ? 'active' : '' }}">
                    <a href="/admin/laporan/pendaftaran">
                        <i class="fas fa-file-alt"></i>
                        <p>Laporan Pendaftaran</p>
                    </a>
                </li>
                <li class="nav-item {{Route::is('settings.index') ? 'active' : '' }}">
                    <a href="/admin/settings">
                        <i class="fas fa-cog"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
