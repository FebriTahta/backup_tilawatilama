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
// use Maatwebsite\Excel\Concerns\FromCollection;

// class PesertaExport implements FromCollection
class PesertaExport implements FromQuery, WithHeadings, ShouldAutoSize,  WithColumnFormatting, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
        
    // }

    use Exportable;

    public function __construct($pelatihan_id)
    {
        $this->pelatihan_id=$pelatihan_id;
    }

    public function query(){
        return Peserta::query()->where('pelatihan_id', $this->pelatihan_id)
            ->select('id','nama','alamat','kota','telp','tmplahir','tgllahir','fs','tj','gm','sl','mt',
            'kriteria','jilid','bersyahadah','lembaga_id','pelatihan_id');
    }

    public function map($row): array{
        if ($row->tgllahir !== null) {
            # code...
            $tgl_lahir = Carbon::parse($row->tgllahir)->format('d/m/Y');
        }else{
            $tgl_lahir = '-';
        }

        if ($row->bersyahadah == 1) {
            # code...
            $lulus = 'LULUS';
        } else {
            # code...
            $lulus = 'TIDAK LULUS';
        }

        if ($row->lembaga !== null) {
            # ada lembaga code...
            $lembaga = $row->lembaga->nm_lembaga;
        }else {
            # tidak ada lembaga code...
            $lembaga = '-';
        }

        if ($row->pelatihan_id !== null) {
            # pelatihan code...
            $pelatihan = $row->pelatihan_id.'-'.$row->pelatihan->nama_pelatihan;
        } else {
            # code...
            $pelatihan = '-';
        }
        
        return [
            $row->id,
            $row->nama,
            $row->alamat,
            $row->kota,
            $row->telp,
            $row->tmplahir,
            Carbon::parse($row->tgllahir)->format('d/m/Y'),
            $row->fs,
            $row->tj,
            $row->gm,
            $row->sl,
            $row->mt,
            $row->kriteria,
            $row->jilid,
            $lulus,
            $lembaga,
            $pelatihan
        ];
    }

    public function headings(): array{
        return [
            "ID",
            "NAMA",
            "ALAMAT",
            "KOTA",
            "TELP",
            "TEMPAT LAHIR",
            "TANGGAL LAHIR",
            "FS",
            "TJ",
            "GM",
            "SL",
            "MT",
            "KRITERIA",
            "JILID",
            "BERSYAHADAH",
            "LEMBAGA",
            "PROGRAM"
        ];
    }

    public function columnFormats(): array
    {
        return [
            'E' => NumberFormat::FORMAT_TEXT,
        ];
    }

}
