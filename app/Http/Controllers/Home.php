<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{

    public function index() {
        $news = News::all();
        return view('index', compact('news'));
    }

    public function certificaciones() {
        $news = News::all();
        return view('certificaciones', compact('news'));
    }

    public function productos() {
        $productos = Product::all();
        $news = News::all();
        return view('navbar.productos', compact('productos', 'news'));
    }

    public function contactanos() {
        $news = News::all();
        return view('navbar.contactanos', compact('news'));
    }

    public function servicios() {
        $fields = Field::all();
        $news = News::all();
        return view('navbar.servicios', compact('fields', 'news'));
    }

    public function noticias() {
        $news = News::all();
        return view('noticias', compact('news'));
    }

    public function clientes() {
        $news = News::all();
        return view('clientes', compact('news'));
    }

    public function quienes_somos() {
        $news = News::all();
        return view('quienes_somos', compact('news'));
    }

}
