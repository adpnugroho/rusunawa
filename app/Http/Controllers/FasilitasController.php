<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

    public function index()
    {
        $fasilitas = Fasilitas::orderBy('nama', 'asc')->get();
        return view('backend.fasilitas.v_index', compact('fasilitas'));
    }

    public function select(Request $request)
    {
        $fasilitas = [];
        if ($request->has('q')) {
            $search = $request->q;
            $fasilitas = Fasilitas::select('id', 'nama')->where('nama', 'LIKE', "%$search%")->get();
        } else {
            $fasilitas = Fasilitas::select('id', 'nama')->get();
        }

        return response()->json($fasilitas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'unique:fasilitas'],
        ]);

        $fasilita = Fasilitas::create($request->all());

        return redirect()->route('fasilitas.index')->with('success', 'Data fasilitas berhasil ditambahkan');
    }


    public function update(Request $request, Fasilitas $fasilita)
    {
        $request->validate([
            'nama' => ['required'],
        ]);

        $fasilita->update($request->all());

        return redirect()->route('fasilitas.index')->with('success', 'Data fasilitas berhasil diperbarui');
    }

    public function destroy(Fasilitas $fasilita)
    {
        $fasilita->delete();

        return redirect()->route('fasilitas.index')->with('success', 'Data fasilitas berhasil dihapus');
    }
}
