<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\Fasilitas;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
Use Image;
use Intervention\Image\Exception\NotReadableException;

class GedungController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

    public function index()
    {
        $gedungs = Gedung::all();
        return view('backend.gedung.v_index', compact('gedungs'));
    }

    public function select(Request $request)
    {
        $gedung = [];
        if ($request->has('q')) {
            $search = $request->q;
            $gedung = Gedung::select('id', 'nama')->where('nama', 'LIKE', "%$search%")->get();
        } else {
            $gedung = Gedung::select('id', 'nama')->get();
        }

        return response()->json($gedung);
    }

    public function create()
    {
        return view('backend.gedung.v_create', [
            'kecamatans' => $this->kecamatans()
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|unique:gedungs,nama',
                'alamat' => 'required',
                'kecamatan' => 'required',
                'tahun_pembuatan' => 'required|integer|min:1900|max:2050',
                'jumlah_lantai' => 'required|integer|max:10',
                'id_api' => 'required',
                'link_gmaps' => 'required',
            ]
        );

        if ($validator->fails()) {
            if ($request['fasilitas']) {
                $request['fasilitas'] = Fasilitas::select('id', 'nama')->whereIn('id', $request->fasilitas)->get();
            }
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

            $gedung = Gedung::create([
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'alamat' => $request->alamat,
                'kecamatan' => $request->kecamatan,
                'tahun_pembuatan' => $request->tahun_pembuatan,
                'jumlah_lantai' => $request->jumlah_lantai,
                'id_api' => $request->id_api,
                'link_gmaps' => $request->link_gmaps,
            ]);
            
            $gedung->fasilitas()->attach($request->fasilitas);

            if($request->hasFile('foto_gedung')){
                $files = $request->file('foto_gedung');
                foreach($files as $file){
                    $path = $file->hashName('public/foto-gedung');
                    $image = Image::make($file)->resize(null, 500, function ($constraint) {
                    $constraint->aspectRatio();
                    });
                    Storage::put($path, (string) $image->encode());
                    $gedung->gallery()->create(['nama'=>$path]);
                }
            }

            return redirect()->route('gedung.index')->with('success', 'Data gedung berhasil ditambahkan');
    }

    public function edit(Gedung $gedung)
    {
        return view('backend.gedung.v_edit', [
            'gedung' => $gedung,
            'kecamatans' => $this->kecamatans()
        ]);
    }

    public function update(Request $request, Gedung $gedung)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'alamat' => 'required',
                'kecamatan' => 'required',
                'tahun_pembuatan' => 'required',
                'jumlah_lantai' => 'required',
                'id_api' => 'required',
                'link_gmaps' => 'required',
            ]
        );

        if ($validator->fails()) {
            if ($request['fasilitas']) {
                $request['fasilitas'] = Fasilitas::select('id', 'nama')->whereIn('id', $request->fasilitas)->get();
            }
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        $gedung->update([
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'alamat' => $request->alamat,
                'kecamatan' => $request->kecamatan,
                'tahun_pembuatan' => $request->tahun_pembuatan,
                'jumlah_lantai' => $request->jumlah_lantai,
                'id_api' => $request->id_api,
                'link_gmaps' => $request->link_gmaps,
            ]);
            $gedung->fasilitas()->sync($request->fasilitas);

            if($request->hasFile('foto_gedung')){
                $files = $request->file('foto_gedung');
                foreach($files as $file){
                    $path = $file->hashName('public/foto-gedung');
                    $image = Image::make($file)->resize(null, 500, function ($constraint) {
                    $constraint->aspectRatio();
                    });
                    Storage::put($path, (string) $image->encode());
                    $gedung->gallery()->create(['nama'=>$path]);
                }
            }

            return redirect()->route('gedung.index')->with('success', 'Data gedung berhasil diperbarui');

    }

    public function delete(Gallery $gallery)
    {
        Storage::delete($gallery->nama);
        $gallery->delete();

        return back();
    }

    public function destroy(Gedung $gedung)
    {
        foreach ($gedung->gallery as $image) {
            Storage::delete($image->nama);
        }
        $gedung->fasilitas()->detach();
        $gedung->gallery()->delete();
        $gedung->delete();

        return redirect()->route('gedung.index')->with('success', 'Data gedung berhasil dihapus');
    }

    private function kecamatans()
    {
        return [
            'Balikpapan Timur' => 'Balikpapan Timur',
            'Balikpapan Barat' => 'Balikpapan Barat',
            'Balikpapan Selatan' => 'Balikpapan Selatan',
            'Balikpapan Utara' => 'Balikpapan Utara',
            'Balikpapan Kota' => 'Balikpapan Kota',
            'Balikpapan Tengah' => 'Balikpapan Tengah',
        ];
    }

}
