<?php

namespace App\Http\Controllers;
use App\Models\Pelatihan;
use Excel;
use Illuminate\Http\Request;
use App\Exports\PesertaExport;
use App\Exports\PesertaSantriExport;
class ExportController extends Controller
{
    public function export_peserta($pelatihan_id)
    {
        $data = Pelatihan::find($pelatihan_id);
        if ($data->program->id > 1) {
            # code...
            return Excel::download(new PesertaExport($pelatihan_id),'data-peserta-pelatihan'.$data->nama_pelatihan.'.xlsx');
        } else {
            # code...
            return Excel::download(new PesertaSantriExport($pelatihan_id),'data-peserta-pelatihan'.$data->nama_pelatihan.'.xlsx');
        }
    }
}
