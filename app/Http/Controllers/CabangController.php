<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Cabang;
use DataTables;
use Validator;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function page_admin_cabang_page()
    {
        return view('be.cabang.index');
    }

    public function page_admin_cabang_list(Request $request)
    {
        if ($request->ajax()) {
            
            $data = Cabang::orderBy('id','desc')->get();
            
            return Datatables::of($data)
                // ->addIndexColumn()
                // ->addColumn('kabupaten', function($data){
                //     $kab = $data->kabupaten->nama;
                //     return $kab;
                // })
                // ->addColumn('kecamatan', function($data){
                //     $kab = $data->kecamatan->nama;
                //     return $kab;
                // })
                // ->addColumn('kelurahan', function($data){
                //     $kab = $data->kelurahan->nama;
                //     return $kab;
                // })
                ->addColumn('option', function($data){
                    $actionBtn = ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn bg-pink waves-effect btn-sm">Hapus</a>';
                    return $actionBtn;
                })
                // ->rawColumns(['option','kabupaten','kecamatan','kelurahan'])
                ->rawColumns(['option'])
                ->make(true);
        }
    }

    public function page_admin_cabang_page_add()
    {
        return view('be.cabang.add');
    }
}
