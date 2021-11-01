<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'no_hp',
        'gedung_id',
        'lantai',
        'detail_keluhan',
        'foto',
        'status_keluhan'
    ];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class);
    }
}
