<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $table = 'cabang';
    use HasFactory;
    // protected $fillable = [
    //     'provinsi_id',
    //     'kabupaten_id',
    //     'kecamatan_id',
    //     'kelurahan_id',
    //     'name',
    //     'map',
    // ];

    public function pelatihan()
    {
        return $this->hasMany(Pelatihan::class);
    }

    // public function kabupaten()
    // {
    //     return $this->belongsTo(Kabupaten::class);
    // }

    // public function kelurahan()
    // {
    //     return $this->belongsTo(Kelurahan::class);
    // }

    // public function kecamatan()
    // {
    //     return $this->belongsTo(Kecamatan::class);
    // }
}
