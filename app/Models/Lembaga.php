<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    use HasFactory;
    protected $table = 'lembaga';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function peserta()
    {
        return $this->hasMany(Peserta::class);
    }
}
