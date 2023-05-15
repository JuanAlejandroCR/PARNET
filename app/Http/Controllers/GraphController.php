<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Graph extends Controller
{
    public function index() {
        $news = News::all();
        return view('graficas.index', compact('news'));
    }
}

