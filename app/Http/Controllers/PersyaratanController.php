<?php

namespace App\Http\Controllers;

use App\Models\Persyaratan;
use Illuminate\Http\Request;

class PersyaratanController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

    public function edit(Persyaratan $persyaratan)
    {
        return view('backend.persyaratan.v_edit', compact('persyaratan'));
    }

    public function update(Request $request, Persyaratan $persyaratan)
    {
        $request->validate([
            'isi' => ['required'],
        ]);

        $persyaratan->update($request->all());

        return back()->with('success', 'Halaman persyaratan berhasil diperbarui');
    }

}
