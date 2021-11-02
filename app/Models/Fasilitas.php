<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function scopeSearch($query, $nama)
    {
        return $query->where('nama', 'LIKE', "%{$nama}%");
    }

    public function gedungs()
    {
        return $this->belongsToMany(Gedung::class)->withTimestamps();
    }
}
