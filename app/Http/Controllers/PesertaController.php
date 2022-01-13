<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use App\Models\Pelatihan;
use DataTables;
use DB;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function page_admin_peserta_page()
    {
        return view('be.peserta.index');
    }

    public function page_admin_peserta_list(Request $request)
    {
        if ($request->ajax()) {
            
            $data = Peserta::orderBy('id','desc')->with('pelatihan');
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('option', function($data){
                    $actionBtn = ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn bg-pink waves-effect btn-sm">Hapus</a>';
                    return $actionBtn;
                })
                ->addColumn('tanggal', function($data){
                    $tanggal = $data->pelatihan->tanggal;
                    return $tanggal;
                })
                ->rawColumns(['option','tanggal'])
                ->make(true);
        }
    }
    
}
