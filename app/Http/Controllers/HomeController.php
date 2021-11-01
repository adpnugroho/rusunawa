<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use App\Models\Gedung;
use App\Models\Gallery;
use App\Models\Persyaratan;
use App\Models\Keluhan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use PDF;
Use Image;
use Intervention\Image\Exception\NotReadableException;

class HomeController extends Controller
{
    public function index()
    {
    	$settings = Setting::pluck('value', 'key');
        $response = Http::get('http://spl.balikpapan.go.id/api/simrusun/data-umum');
        $data = $response->json();
        
    	return view('frontend.v_index', compact('settings','data'));
    }

    public function listRusunawa(Request $request)
    {
        $settings = Setting::pluck('value', 'key');
        $galleries = Gallery::limit(1)->get();

        $gedungs = Gedung::query();
        if (request('term')) {
            $gedungs = Gedung::where('kecamatan', 'Like', '%' . request('term') . '%')->get();
        }else {
            $gedungs = Gedung::all();
        }

        return view('frontend.v_rusunawa_list', compact('settings', 'gedungs', 'galleries'));
    }

    public function detailRusunawa(Gedung $gedung)
    {
        $settings = Setting::pluck('value', 'key');
        $fasilitas = $gedung->fasilitas;
        $galleries = Gallery::limit(1)->get();

        $response = Http::post('http://spl.balikpapan.go.id/api/simrusun/detail-rusunawa',[
            'rusunawa_id' =>'' . e($gedung->id_api) . ''
        ]);
        $data = $response->json();
        
        $response_biaya = Http::post('http://spl.balikpapan.go.id/api/simrusun/detail-rusunawa', [
            'rusunawa_id' => '' . e($gedung->id_api) . ''
        ]);
        $biaya = $response_biaya->json();
        
        return view('frontend.v_rusunawa_detail', compact('gedung', 'settings', 'fasilitas', 'galleries', 'data', 'biaya'));
    }

    public function persyaratan(Persyaratan $persyaratan)
    {
        $persyaratan = Persyaratan::all();
        $settings = Setting::pluck('value', 'key');

        return view('frontend.v_persyaratan', compact('persyaratan', 'settings'));
    }

    public function keluhan()
    {
        $gedungs = Gedung::all();
        $settings = Setting::pluck('value', 'key');
        return view('frontend.v_keluhan', compact('gedungs', 'settings'));
    }

    public function keluhanStore(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'gedung_id' => 'required',
            'lantai' => 'required|integer|max:5',
            'detail_keluhan' => 'required',
            'status_keluhan' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $keluhan = new Keluhan;
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = $request->file('foto')->store('public/foto-keluhan');
            $image = Image::make($file)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    });
            Storage::put($path, (string) $image->encode());
            $keluhan->foto = $path;
        }

        $keluhan->nama_lengkap = $request->nama_lengkap;
        $keluhan->no_hp = $request->no_hp;
        $keluhan->gedung_id = $request->gedung_id;
        $keluhan->lantai = $request->lantai;
        $keluhan->detail_keluhan = $request->detail_keluhan;        
        $keluhan->status_keluhan = $request->status_keluhan;
        $keluhan->save();

        return redirect()->route('keluhan')->with('success', 'Keluhan Anda berhasil ditambahkan. Pengelola akan segera menghubungi Anda, mohon ditunggu :)');
    }

    public function pendaftaran(Pendaftaran $pendaftaran)
    {
        $gedungs = Gedung::all();
        $settings = Setting::pluck('value', 'key');
        return view('frontend.v_pendaftaran', compact('gedungs', 'settings'),[
        'pendaftaran' => $pendaftaran,
        'jenis_kelamin' => $this->jenis_kelamin(),
        'agama' => $this->agama(),
        'status_pernikahan' => $this->status_pernikahan(),
        'status_tempat_tinggal' => $this->status_tempat_tinggal(),
        'hubungan_1' => $this->hubungan_1(),
        'hubungan_2' => $this->hubungan_2(),
        'hubungan_3' => $this->hubungan_3()
        ]);
    }

    public function pendaftaranStore(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'no_ktp' => 'required',
            'no_hp' => 'required',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status_pernikahan' => 'required',
            'status_tempat_tinggal' => 'required',
            'gedung_id' => 'required',
            'lantai' => 'required|integer|max:5',
            'pekerjaan' => 'required',
            'status_pekerjaan' => 'required',
            'nama_tempat_kerja' => 'required',
            'alamat_tempat_kerja' => 'required',
            'penghasilan_tetap' => 'required',
            'foto_ktp' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        $pendaftaran = new Pendaftaran;

        if($request->hasFile('foto_ktp')){
            $file = $request->file('foto_ktp');
            $path = $request->file('foto_ktp')->store('public/foto-ktp');
            $image = Image::make($file)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    });
            Storage::put($path, (string) $image->encode());
            $pendaftaran->foto_ktp = $path;
        }

        $pendaftaran->nama_lengkap = $request->nama_lengkap;
        $pendaftaran->no_ktp = $request->no_ktp;
        $pendaftaran->no_hp = $request->no_hp;
        $pendaftaran->nama_lengkap = $request->nama_lengkap;
        $pendaftaran->slug = Str::slug($pendaftaran->nama_lengkap, '-').'-'.Str::random(4);
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->alamat = $request->alamat;        
        $pendaftaran->agama = $request->agama;
        $pendaftaran->status_pernikahan = $request->status_pernikahan;
        $pendaftaran->status_tempat_tinggal = $request->status_tempat_tinggal;
        $pendaftaran->gedung_id = $request->gedung_id;
        $pendaftaran->lantai = $request->lantai;
        $pendaftaran->pekerjaan = $request->pekerjaan;
        $pendaftaran->nama_tempat_kerja = $request->nama_tempat_kerja;
        $pendaftaran->status_pekerjaan = $request->status_pekerjaan;
        $pendaftaran->alamat_tempat_kerja = $request->alamat_tempat_kerja;
        $pendaftaran->penghasilan_tetap = $request->penghasilan_tetap;
        $pendaftaran->penghasilan_tambahan = $request->penghasilan_tambahan;
        $pendaftaran->no_ktp_pasangan = $request->no_ktp_pasangan;
        $pendaftaran->alamat_pasangan = $request->alamat_pasangan;
        $pendaftaran->pekerjaan_pasangan = $request->pekerjaan_pasangan;
        $pendaftaran->penghasilan_pasangan = $request->penghasilan_pasangan;
        $pendaftaran->jumlah_pengikut = $request->jumlah_pengikut;
        $pendaftaran->pengikut_1 = $request->pengikut_1;
        $pendaftaran->umur_1 = $request->umur_1;
        $pendaftaran->hubungan_1 = $request->hubungan_1;
        $pendaftaran->pengikut_2 = $request->pengikut_2;
        $pendaftaran->umur_2 = $request->umur_2;
        $pendaftaran->hubungan_2 = $request->hubungan_2;
        $pendaftaran->pengikut_3 = $request->pengikut_3;
        $pendaftaran->umur_3 = $request->umur_3;
        $pendaftaran->hubungan_3 = $request->hubungan_3;
        $pendaftaran->status_pendaftaran = $request->status_pendaftaran;
        $pendaftaran->save();

        return redirect()->route('pendaftaranSelesai', $pendaftaran->slug);
    }

    public function pendaftaranSelesai(Pendaftaran $pendaftaran)
    {
        $settings = Setting::pluck('value', 'key');
        
        return view('frontend.v_pendaftaran_selesai', compact('pendaftaran', 'settings'));
    }

    public function cetakBerkas(Pendaftaran $pendaftaran)
    {
        $pdf = PDF::loadview('frontend.v_pendaftaran_cetak_berkas', compact('pendaftaran'))->setPaper('legal', 'potrait');
        return $pdf->download('berkas-pendaftaran-rusunawa.pdf');
    }

    private function jenis_kelamin()
    {
        return [
            'laki-laki' => 'Laki-laki',
            'perempuan' => 'Perempuan'
        ];
    }

    private function agama()
    {
        return [
            'islam' => 'Islam',
            'kristen' => 'Kristen',
            'katolik' => 'Katolik',
            'hindu' => 'Hindu',
            'buddha' => 'Buddha',
            'konghucu' => 'Konghucu'
        ];
    }

    private function status_pernikahan()
    {
        return [
            'menikah' => 'Menikah',
            'belum menikah' => 'Belum menikah'
        ];
    }

    private function status_tempat_tinggal()
    {
        return [
            'menyewa' => 'Menyewa',
            'mengontrak' => 'Mengontrak',
            'menumpang' => 'Menumpang'
        ];
    }

    private function hubungan_1()
    {
        return [
            'suami/istri' => 'Suami/Istri',
            'anak' => 'Anak',
            'lainnya' => 'Lainnya'
        ];
    }

    private function hubungan_2()
    {
        return [
            'suami/istri' => 'Suami/Istri',
            'anak' => 'Anak',
            'lainnya' => 'Lainnya'
        ];
    }

    private function hubungan_3()
    {
        return [
            'suami/istri' => 'Suami/Istri',
            'anak' => 'Anak',
            'lainnya' => 'Lainnya'
        ];
    }

}
