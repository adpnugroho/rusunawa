<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Keluhan;
use App\Models\Pendaftaran;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $keluhan_navbar = Keluhan::where('status_keluhan','Baru')->get();
        $pendaftaran_navbar = Pendaftaran::where('status_pendaftaran','Baru')->get();
        view()->share('keluhan_navbar', $keluhan_navbar);
        view()->share('pendaftaran_navbar', $pendaftaran_navbar);
    }
}
