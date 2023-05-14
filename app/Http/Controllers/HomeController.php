<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Field;
use App\Models\Noticias;
use App\Models\Productos;

class HomeController extends Controller
{

    public function index() {
        $news = Noticias::all();
        return view('index', compact('news'));
    }

    public function certificaciones() {
        $news = Noticias::all();
        return view('certificaciones', compact('news'));
    }

    public function productos() {
        $productos = Productos::all();
        $news = Noticias::all();
        return view('navbar.productos', compact('productos', 'news'));
    }

    public function contactanos() {
        $news = Noticias::all();
        return view('navbar.contactanos', compact('news'));
    }

    public function servicios() {
        $fields = Field::all();
        $news = Noticias::all();
        return view('navbar.servicios', compact('fields', 'news'));
    }

    public function noticias() {
        $news = Noticias::all();
        return view('noticias', compact('news'));
    }

    public function clientes() {
        $news = Noticias::all();
        return view('clientes', compact('news'));
    }

    public function quienes_somos() {
        $news = Noticias::all();
        return view('quienes_somos', compact('news'));
    }

}
