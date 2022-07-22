<?php

namespace App\Exports;
use App\Models\Peserta;
use App\Models\Pelatihan;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\FromCollection;

class PesertaCustomSearchDemoExport implements FromQuery, WithHeadings, ShouldAutoSize, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }

    use Exportable;

    public function query(){
        // return Peserta::query()->where('pelatihan_id', '3')
        //     ->select('id','nama','alamat','kota','telp','tmplahir','tgllahir','fs','tj','gm','sl','mt',
        //     'kriteria','jilid','bersyahadah','lembaga_id','pelatihan_id');
        
        // $peserta = Peserta::query()->where('bersyahadah','1')->with('pelatihan');

        $peserta = Peserta::query()->where('bersyahadah', '1')->whereHas('pelatihan', function($q){
            $q->where('nama_pelatihan', 'PELATIHAN TOT INSTRUKTUR')->orwhere('program_id', '3');
        });
        return $peserta;
    }

    public function headings(): array{
        return [
            "PROGRAM",
            "NAMA",
            "ALAMAT",
            "KOTA",
            "TELP",
        ];
    }

    public function map($row): array{
        return [
            $row->pelatihan->nama_pelatihan,
            $row->nama,
            $row->alamat,
            $row->kota,
            $row->telp,
        ];
    }

}
