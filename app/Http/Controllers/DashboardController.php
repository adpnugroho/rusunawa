<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Keluhan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $keluhan_baru = Keluhan::where('status_keluhan', 'Baru')->get();
        $keluhan_diproses = Keluhan::where('status_keluhan', 'Diproses')->get();
        $keluhan_selesai = Keluhan::where('status_keluhan', 'Selesai')->get();
        $pendaftaran_baru = Pendaftaran::where('status_pendaftaran', 'Baru')->get();
        $pendaftaran_diproses = Pendaftaran::where('status_pendaftaran', 'Diproses')->get();
        $pendaftaran_selesai = Pendaftaran::where('status_pendaftaran', 'Selesai')->get();
        $pendaftaran_total = Pendaftaran::all();
        $keluhan_total = Keluhan::all();
        return view('backend.dashboard.v_index' ,compact('keluhan_baru', 'keluhan_diproses', 'keluhan_selesai', 'pendaftaran_baru', 'pendaftaran_diproses', 'pendaftaran_selesai', 'pendaftaran_total', 'keluhan_total'));
    }
}
