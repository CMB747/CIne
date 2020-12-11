<?php

namespace App\Exports;

use App\Movie;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class MoviesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $movies = DB::table('movies')->select('id', 'name', 'director', 'synopsis', 'duration', 'category', 'genre', 'actors')->get();
        return $movies;
    }

    public function headings():array {
        return[
            'ID',
            'Nombre',
            'Director',
            'Sinopsis',
            'Duracion',
            'Categoria',
            'Genero',
            'Actores'
        ];
    }
}
