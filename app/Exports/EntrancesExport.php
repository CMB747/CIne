<?php

namespace App\Exports;

use App\Entrance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class EntrancesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $entrances = DB::table('entrances')->select('id', 'hourEntrance', 'price', 'date')->get();
        return $entrances;
    }

    public function headings():array {
        return[
            'ID',
            'Hora de entrada',
            'Precio',
            'Fecha'
        ];
    }
}
