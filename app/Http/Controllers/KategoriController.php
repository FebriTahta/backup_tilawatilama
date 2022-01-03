<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use DataTables;
use Validator;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function page_admin_kategori_page()
    {
        return view('be.kategori.index');
    }

    public function page_admin_kategori_list(Request $request)
    {
        if ($request->ajax()) {
            
            $data = Kategori::orderBy('id','asc');
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('option', function($data){
                    $actionBtn = ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn bg-pink waves-effect btn-sm">Hapus</a>';
                    return $actionBtn;
                })
                ->addColumn('id', function($data){
                    $actionBtn = $data->id;
                    return $actionBtn;
                })
                ->rawColumns(['option','id'])
                ->make(true);
        }
    }

    public function page_admin_kategori_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:20',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else{
            $data   = Kategori::updateOrCreate(
                [
                    'id' => $request->id
                ],
                [
                    'name'      => $request->name,
                ]
            );

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Kategori Berhasil Ditambahkan'
                ]
            );
        }
    }

    public function page_admin_kategori_delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'     => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);
        }else{
            $data = Kategori::where('id', $request->id)->delete();
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Kategori Berhasil Dihapus'
                ]
            );
        }
    }
}
