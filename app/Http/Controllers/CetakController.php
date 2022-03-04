<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\Peserta;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;
use DataTables;

class CetakController extends Controller
{
    public function page_cetak_depan()
    {
        $program = Program::all();
        return view('be.cetak.depan',compact('program'));
    }

    public function page_cetak_belakang()
    {
        $program = Program::all();
        return view('be.cetak.belakang',compact('program'));
    }

    public function pilih_program_diklat($program_id)
    {
        // $data = Pelatihan::where("program_id", $program_id)->orderBy('id','desc')->limit(50)->get();
        // return json_encode($data);
        $data = Pelatihan::where('program_id', $program_id)->with('cabang')->orderBy('id', 'DESC')->get();
        return Datatables::of($data)
        ->addColumn('option', function($data){
            $actionBtn = ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-name="'.$data->name.'" data-toggle="modal" href="javascript:void(0)" class="delete btn bg-pink waves-effect btn-sm">Hapus</a>';
            return $actionBtn;
        })
        ->addColumn('cabang', function($data){
            if ($data->cabang !== NULL) {
                # code...
                $cb = $data->cabang->namacabang;
                return $cb;
            } else {
                # code...
                return '-';
            }
            
        })
        ->addColumn('print', function($data){
            if ($data->cabang !== NULL) {
                # code...
                return '<a href="#" data-nama_pelatihan="'.$data->nama_pelatihan.'" data-namacabang="'.$data->cabang->namacabang.'" data-pelatihan_id="'.$data->id.'" data-toggle="modal" data-target="#modal-print" class="demo-google-material-icon"> <i class="material-icons">print</i> <span class="icon-name">print</span> </a>';
            }else {
                # code...
                return '<a href="#" data-nama_pelatihan="'.$data->nama_pelatihan.'" data-pelatihan_id="'.$data->id.'" data-toggle="modal" data-target="#modal-print" class="demo-google-material-icon"> <i class="material-icons">print</i> <span class="icon-name">print</span> </a>';
            }
        })
        ->rawColumns(['option','cabang','print'])
        ->make(true);
    }

    public function cetak_belakang(Request $request)
    {
        $id             = $request->pelatihan_id;
        $pelatihan      = Pelatihan::find($id);        
        $peserta        = Peserta::where('pelatihan_id', $id)->where('kriteria','<>','')->where('bersyahadah', 1)->get();
        $customPaper    = array(0,0,792,612);
    	$pdf = PDF::loadview('be.cetak.cetak_belakang',compact('peserta','pelatihan'))->setPaper($customPaper, 'portrait');
    	return $pdf->download('ijazah-belakang-peserta-_'.$pelatihan->nama_pelatihan.'.pdf','I');
    }

    public function cetak_depan(Request $request)
    {
        $id             = $request->pelatihan_id;
        $pelatihan      = Pelatihan::find($id);        
        $peserta        = Peserta::where('pelatihan_id', $id)->where('kriteria','<>','')->where('bersyahadah', 1)->get();
        $customPaper    = array(0,0,792,612);
    	$pdf = PDF::loadview('be.cetak.cetak_depan',compact('peserta','pelatihan'))->setPaper($customPaper, 'portrait');
    	return $pdf->download('ijazah-depan-peserta-_'.$pelatihan->nama_pelatihan.'.pdf','I');
    }

    public function cetak_depan_seorang(Request $request, $peserta_id)
    {
        $item        = Peserta::find($peserta_id);
        $customPaper    = array(0,0,792,612);
    	$pdf = PDF::loadview('be.cetak.cetak_depan_seorang',compact('item'))->setPaper($customPaper, 'portrait');
    	return $pdf->download('ijazah-depan-peserta-_'.$item->name.'.pdf','I');
    }

    public function cetak_belakang_seorang(Request $request, $peserta_id)
    {
        $p        = Peserta::find($peserta_id);
        $customPaper    = array(0,0,792,612);
    	$pdf = PDF::loadview('be.cetak.cetak_belakang_seorang',compact('p'))->setPaper($customPaper, 'portrait');
    	return $pdf->download('ijazah-depan-peserta-_'.$p->name.'.pdf','I');
    }
}
