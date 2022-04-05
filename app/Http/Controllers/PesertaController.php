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
            
            $data = Peserta::with(['pelatihan']);
            
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
                ->addColumn('name', function($data){
                    
                    $name = '<a href="/admin-peserta-edit/'.$data->id.'">'.$data->nama.'</a>';
                    return $name;
                })
                ->addColumn('cetak', function($data){
                    $cetak = '<a href="#"><i class="fa fa-print"></i></a>';
                    return $cetak;
                })
                ->rawColumns(['option','tanggal','cetak','name'])
                ->make(true);
        }
    }

    public function page_admin_peserta_edit($peserta_id)
    {
        $data = Peserta::find($peserta_id);
        return view('be.peserta.edit',compact('data'));
    }

    public function post_admin_peserta(Request $request)
    {
        Peserta::updateOrCreate(
            [
                'id' => $request->id,
            ],
            [
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'kota' => $request->kota,
                'telp' => $request->telp,
                'tmptlahir' => $request->tmptlahir,
                'tgllahir' => $request->tgllahir,
            ]
        );

        return redirect()->back();
    }
    
}
