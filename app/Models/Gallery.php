<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'gedung_id',
        'nama',
    ];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class);
    }
}
