<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

    public function index(Pendaftaran $pendaftaran)
    {
        $pendaftarans = Pendaftaran::all();

        return view('backend.pendaftaran.v_index', compact('pendaftarans'),[
            'pendaftaran' => $pendaftaran,
            'status_pendaftaran' => $this->status_pendaftaran()
        ]);
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $pendaftaran->update([
                'status_pendaftaran' => $request->status_pendaftaran]);

        return redirect()->route('pendaftaran.index')->with('success', 'Status pendaftaran berhasil diperbarui');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        Storage::delete($pendaftaran->foto_ktp);
        
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')
            ->with('success', 'Data pendaftaran berhasil dihapus');
    }

    private function status_pendaftaran()
    {
        return [
            'Baru' => 'Baru',
            'Diproses' => 'Diproses',
            'Selesai' => 'Selesai'
        ];
    }
}
