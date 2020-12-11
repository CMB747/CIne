<?php

namespace App\Http\Controllers;

use App\Premiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PremieresExport;

class PremiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $premieres = DB::table('premieres')->paginate(10);
        return view('premieres.index', compact('premieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('premieres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Premiere::create($request->all());
        return redirect()->route('premieres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Premiere  $premiere
     * @return \Illuminate\Http\Response
     */
    public function show(Premiere $premiere)
    {
        return view('premieres.show', compact('premiere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Premiere  $premiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Premiere $premiere)
    {
        return view('premieres.edit', compact('premiere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Premiere  $premiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Premiere $premiere)
    {
        $premiere->update($request->all());
        return redirect()->route('premieres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Premiere  $premiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Premiere $premiere)
    {
        $premiere->delete();
        return redirect()->route('premieres.index');
    }

    public function exportToPDF(){
        $premieres = Premiere::get();
        $pdf = PDF::loadView('premieres.exportToPDF', compact('premieres'));
        return $pdf->download('FuncionesRegistradas.pdf');
    }

    public function exportToXls(){
        return Excel::download(new PremieresExport, 'premieres.xlsx');
    }

    public function exportToCsv(){
        return Excel::download(new PremieresExport, 'premieres.csv');
    }
}
