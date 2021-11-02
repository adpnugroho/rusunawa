<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporanKeluhan(Keluhan $keluhan)
    {
        $keluhans = Keluhan::all();

        return view('backend.laporan.v_keluhan', compact('keluhans'));
    }

    public function laporanPendaftaran(Pendaftaran $pendaftaran)
    {
        $pendaftarans = Pendaftaran::all();

        return view('backend.laporan.v_pendaftaran', compact('pendaftarans'));
    }
}
