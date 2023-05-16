<?php

namespace App\Http\Controllers;


use App\Models\Noticias;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index() {
        $noticias = Noticias::all();
        return view('graficas.index', compact('noticias'));
    }
}

