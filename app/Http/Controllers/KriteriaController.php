<?php

namespace App\Http\Controllers;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use DataTables;

class KriteriaController extends Controller
{
    public function page_admin_kriteria_page()
    {
        return view('be.kriteria.index');
    }

    public function page_admin_kriteria_list(Request $request)
    {
        if ($request->ajax()) {
            
            $data = Kriteria::all();
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('option', function($data){
                    $actionBtn = ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn bg-pink waves-effect btn-sm">Hapus</a>';
                    return $actionBtn;
                })
                ->rawColumns(['option'])
                ->make(true);
        }
    }
}
