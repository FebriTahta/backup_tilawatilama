<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    protected $table = 'kabupaten';
    protected $fillable = [
        'id',
        'provinsi_id',
        'nama',
        'id_jenis',
    ];
    
    public function cabang()
    {
        return $this->hasMany(Cabang::class);
    }
}
