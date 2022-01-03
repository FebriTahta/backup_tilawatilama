<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    // ];
    protected $table = 'kategori';

    public function lembaga()
    {
        return $this->hasMany(Lembaga::class);
    }
}
