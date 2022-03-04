<?php

namespace App\Http\Controllers;
use DataTables;
use Carbon\Carbon;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Validator;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function page_admin_pelatihan_page(Request $request)
    {
        return view('be.pelatihan.index');
    }

    public function page_admin_pelatihan_list(Request $request)
    {
        if ($request->ajax()) {
            
            $data = Pelatihan::orderBy('id','desc')->with('cabang');
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('masuk', function($data){
                    $masuk = '<a href="/admin-peserta-pelatihan/'.$data->id.'/page" style="background-color: transparent;"><i class="material-icons">exit_to_app</i></a>';
                    return $masuk;
                    
                })
                ->addColumn('option', function($data){
                    $actionBtn = ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn bg-pink waves-effect btn-sm">Hapus</a>';
                    return $actionBtn;
                })
                ->addColumn('cabang', function($data){
                    $cabang = $data->cabang->namacabang;
                    return strtoupper($cabang);
                    
                })
                ->addColumn('tanggals', function($data){
                    $tgl = Carbon::parse($data->tanggal)->isoFormat('DD/MM/YYYY');
                    return $tgl;
                })
                ->addColumn('program', function($data){
                    $program = $data->program->jenis;
                    return $program;
                })
                ->addColumn('total', function($data){
                    $total = $data->peserta->count();
                    return $total;
                })
                ->rawColumns(['option','total','cabang','program','masuk'])
                ->make(true);
        }
    }

    public function page_admin_peserta_pelatihan_page(Request $request, $pelatihan_id)
    {
        $data = Pelatihan::find($pelatihan_id);
        return view('be.pelatihan.peserta',compact('data'));
    }

    public function page_admin_peserta_pelatihan_list(Request $request, $pelatihan_id)
    {
        if ($request->ajax()) {
            
            $data = Peserta::where('pelatihan_id',$pelatihan_id);
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('option', function($data){
                    $actionBtn = ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn bg-pink waves-effect btn-sm">Hapus</a>';
                    return $actionBtn;
                })
                ->addColumn('edit', function($data){
                    $edit = '<a href="#" data-toggle="modal" data-target="#modal-edit" 
                    data-id="'.$data->id.'" data-nama="'.$data->nama.'" data-alamat="'.$data->alamat.'" data-kota="'.$data->kota.'" 
                    data-telp="'.$data->telp.'" data-tmplahir="'.$data->tmplahir.'" data-tgllahir="'.$data->tgllahir.'"
                    data-fs="'.$data->fs.'" data-tj="'.$data->tj.'" data-gm="'.$data->gm.'" data-sl="'.$data->sl.'" data-mt="'.$data->mt.'"
                    data-kriteria="'.$data->kriteria.'"
                    style="background-color: transparent;"><i class="material-icons">build</i></a>';
                    return $edit;
                })
                ->addColumn('print', function($data){
                    $print = ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn bg-pink waves-effect btn-sm"><i class="material-icons">print</i></a>';
                    return $print;
                })
                ->rawColumns(['option','edit','print'])
                ->make(true);
        }
    }

    public function page_admin_peserta_pelatihan_edit(Request $request){

        if ($request->ajax()) {
            
            $validator = Validator::make($request->all(), [
                'id'        =>  'required',
                'nama'      =>  'required|max:100',
                'alamat'    =>  'required|max:5000',
                'kota'      =>  'required|max:50',
                'telp'      =>  'nullable',
                'tmplahir'  =>  'required|max:50',
                'tgllahir'  =>  'required',
                'fs'        =>  'nullable',
                'tj'        =>  'nullable',
                'gm'        =>  'nullable',
                'sl'        =>  'nullable',
                'mt'        =>  'nullable',
            ]);

            if ($validator->fails()) {

                return response()->json([
                    'status' => 400,
                    'message'  => 'Gagal Update Data',
                    'errors' => $validator->messages(),
                ]);
    
            }else {
                $data   = Peserta::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'nama'      =>  strtoupper($request->nama),
                        'alamat'    =>  strtoupper($request->alamat),
                        'kota'      =>  strtoupper($request->kota),
                        'telp'      =>  $request->telp,
                        'tmplahir'  =>  strtoupper($request->tmplahir),
                        'tgllahir'  =>  $request->tgllahir,
                        'fs'        =>  $request->fs,
                        'tj'        =>  $request->tj,
                        'gm'        =>  $request->gm,
                        'sl'        =>  $request->sl,
                        'mt'        =>  $request->mt
                    ]
                );

                return response()->json(
                    [
                      'status'  => 200,
                      'message' => 'Data Peserta Berhasil Di Update'
                    ]
                );
            }

        }
    }

}
