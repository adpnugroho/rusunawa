<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'alamat',
        'kecamatan',
        'tahun_pembuatan',
        'jumlah_lantai',
        'id_api',
        'link_gmaps',
    ];

    public function getRouteKeyName()
    {
    return 'slug';
    }

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class)->withTimestamps();
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function keluhan()
    {
        return $this->hasMany(Keluhan::class);
    }

    public function pendaftaran()
    {
        return $this->hasMany(Keluhan::class);
    }
}
