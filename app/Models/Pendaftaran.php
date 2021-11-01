<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $dates = ['tanggal_lahir'];

    protected $fillable = [
        'no_ktp',
        'no_hp',
        'nama_lengkap',
        'slug',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'status_pernikahan',
        'status_tempat_tinggal',
        'gedung_id',
        'lantai',
        'pekerjaan',
        'nama_tempat_kerja',
        'status_pekerjaan',
        'alamat_tempat_kerja',
        'penghasilan_tetap',
        'penghasilan_tambahan',
        'no_ktp_pasangan',
        'alamat_pasangan',
        'pekerjaan_pasangan',
        'penghasilan_pasangan',
        'jumlah_pengikut',
        'pengikut_1',
        'umur_1',
        'hubungan_1',
        'pengikut_2',
        'umur_2',
        'hubungan_2',
        'pengikut_3',
        'umur_3',
        'hubungan_3',
        'foto_ktp',
        'foto_kk',
        'foto_surat_nikah',
        'status_pendaftaran'
    ];

    public function getRouteKeyName()
    {
    return 'slug';
    }

    public function gedung()
    {
        return $this->belongsTo(Gedung::class);
    }
}
