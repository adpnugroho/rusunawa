<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KeluhanController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

    public function index(Keluhan $keluhan)
    {
        $keluhans = Keluhan::all();

        return view('backend.keluhan.v_index', compact('keluhans'),[
            'keluhan' => $keluhan,
            'status_keluhan' => $this->status_keluhan()
        ]);
    }

    public function update(Request $request, Keluhan $keluhan)
    {
        $keluhan->update([
                'status_keluhan' => $request->status_keluhan]);

        return redirect()->route('keluhan.index')->with('success', 'Status keluhan berhasil diperbarui');
    }

    public function destroy(Keluhan $keluhan)
    {
        Storage::delete($keluhan->foto);
        $keluhan->delete();

        return redirect()->route('keluhan.index')
            ->with('success', 'Data keluhan berhasil dihapus');
    }

    private function status_keluhan()
    {
        return [
            'Baru' => 'Baru',
            'Diproses' => 'Diproses',
            'Selesai' => 'Selesai'
        ];
    }
}
