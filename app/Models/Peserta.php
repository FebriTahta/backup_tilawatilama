<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $table = 'pesertaprogram';
    protected $fillable = [
                        'nama'     ,
                        'alamat'    ,
                        'kota'     ,
                        'telp'      ,
                        'tmplahir'  ,
                        'tgllahir'  ,
                        'fs'        ,
                        'tj'        ,
                        'gm'        ,
                        'sl'        ,
                        'mt'        ,
                        'kriteria'  ,
    ];

    public function pelatihan()
    {
        return $this->belongsTo(Pelatihan::class);
    }

    public function lembaga()
    {
        return $this->belongsTo(Lembaga::class);
    }
}
