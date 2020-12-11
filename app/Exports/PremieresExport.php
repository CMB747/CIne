<?php

namespace App\Exports;

use App\Premiere;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class PremieresExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $premieres = DB::table('premieres')->select('id', 'start', 'end', 'available', 'type')->get();
        return $premieres;
    }

    public function headings():array {
        return[
            'ID',
            'Inicio',
            'Final',
            'Disponible',
            'Turno'
        ];
    }
}
