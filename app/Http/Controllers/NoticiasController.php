<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class NoticiasController extends Controller
{
    public function index()
    {
        return view('noticias.index');
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(Request $request)
    {
        $noticias = Noticias::create($request->all());
        return response()->json($noticias);
    }

    public function edit(int $noticias)
    {
        $noticias = Noticias::find($noticias);
        return view('noticias.edit', compact('noticias'));
    }

    public function update(Request $request, int $noticias)
    {
        $noticias = Noticias::find($noticias);
        $noticias->update($request->all());
        return response()->json($noticias);
    }

    public function destroy(int $noticias)
    {
        Noticias::find($noticias)->delete();
    }

    public function getNews() {
        $noticias = Noticias::all();
        return DataTables::of($noticias)->make(true);
    }

    public function changeStatus(int $id) {
        $noticias = Noticias::find($id);
        $noticias->active = $noticias->active == 1 ? 0 : 1;
        $noticias->save();
    }
}
