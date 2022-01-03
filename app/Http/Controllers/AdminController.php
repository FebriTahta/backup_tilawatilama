<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use App\Models\Cabang;
use App\Models\Pelatihan;
use App\Models\Lembaga;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function page_admin_dashboard()
    {
        $peserta = Peserta::all()->count();
        $cabang = Cabang::all()->count();
        $pelatihan = Pelatihan::all()->count();
        $lembaga = Lembaga::all()->count();
        $lembaga_aktif = Lembaga::where('keanggotaan',1)->count();
        $lembaga_non_aktif = $lembaga - $lembaga_aktif;
        return view('be.artikel_berita.dashboard',compact('peserta','cabang','pelatihan','lembaga','lembaga_aktif','lembaga_non_aktif'));
    }

    public function page_admin_post()
    {
        return view('be.artikel_berita.post');
    }
}
