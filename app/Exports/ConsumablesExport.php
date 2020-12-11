<?php

namespace App\Exports;

use App\Consumable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class ConsumablesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $consumables = DB::table('consumables')->select('id', 'name', 'price', 'quantity')->get();
        return $consumables;
    }

    public function headings():array {
        return[
            'ID',
            'Artículo',
            'Precio',
            'Cantidad'
        ];
    }
}
