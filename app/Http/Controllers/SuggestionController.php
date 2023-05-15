<?php

namespace App\Http\Controllers;

use App\Exports\SuggestionExport;
use App\Models\Noticias;
use App\Models\Suggestion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;

class SuggestionController extends Controller
{
    public function index()
    {
        return view('sugerencias.index');
    }

    public function create()
    {
        $noticias = Noticias::all();
        return view('sugerencias.create', compact('noticias'));
    }

    public function store(Request $request)
    {
        $suggestion = Suggestion::create($request->all());
        return response()->json($suggestion);
    }

    public function edit(int $suggestion)
    {
        $suggestion = Suggestion::find($suggestion);
        return view('sugerencias.edit', compact('suggestion'));
    }

    public function update(Request $request, int $suggestion)
    {
        $suggestion = Suggestion::find($suggestion);
        $suggestion->update($request->all());
        return response()->json($suggestion);
    }

    public function destroy(int $suggestion)
    {
        Suggestion::find($suggestion)->delete();
    }

    public function getSuggestions()
    {
        $suggestions = Suggestion::all();
        return DataTables::of($suggestions)->make(true);
    }

    public function pdf()
    {
        $suggestions = Suggestion::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.pdf', compact('suggestions'));
        return $pdf->stream();
    }

    public function excel()
    {
        return Excel::download(new SuggestionExport, 'Sugerencias_' . Carbon::now() . '.xlsx');
    }
}