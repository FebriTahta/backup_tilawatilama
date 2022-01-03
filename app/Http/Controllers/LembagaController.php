<?php

namespace App\Http\Controllers;
use App\Models\Lembaga;
use Illuminate\Http\Request;
use DataTables;
class LembagaController extends Controller
{
    public function page_admin_lembaga_list(Request $request)
    {
        if ($request->ajax()) {
            
            $data = Lembaga::orderBy('id','desc');
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('option', function($data){
                    $actionBtn = ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn bg-pink waves-effect btn-sm">Hapus</a>';
                    return $actionBtn;
                })
                ->addColumn('aktif', function($data){
                    if ($data->keanggotaan == '1') {
                        # code...
                        return 'Ya';
                    }else {
                        # code...
                        return 'Tidak';
                    }
                })
                ->addColumn('kategori', function($data){
                    if ($data->kategori !== null) {
                        # code...
                        return $data->kategori->Status;
                    }else {
                        # code...
                        return '-';
                    }
                })
                ->rawColumns(['option','aktif'])
                ->make(true);
        }
    }

    public function page_admin_lembaga_page(Request $request)
    {
        return view('be.lembaga.index');
    }
}
