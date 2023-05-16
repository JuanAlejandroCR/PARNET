<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\Facades\DataTables;

class ProductosController extends Controller
{
    public function index()
    {
        return view('productos.index');
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $productos = Productos::create($request->all());
        $productos->setFile($request['image']);
        return response()->json($productos);
    }

    public function edit(int $producto)
    {
        $productos = Productos::find($producto);
        return view('productos.edit', compact('productos'));
    }

    public function update(Request $request)
    {
        $producto = Productos::find($request['id']);

        if (isset($request['image']))
            $producto->setFile($request['image']);

        $producto->update($request->except('image'));

        return response()->json($producto);
    }

    public function destroy(int $producto)
    {
        Productos::find($producto)->delete();
    }

    public function getProducts()
    {
        $productos = Productos::all();
        return DataTables::of($productos)->make(true);
    }

    public function report() {
        $productos = Productos::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('productos.report', compact('productos'));
        return $pdf->stream();
    }

    public function pdf(int $id) {
        $producto = productoos::find($id);
        $dataSheet = explode('*', $product->data_sheet);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('productos.pdf', compact('producto', 'dataSheet'));
        return $pdf->stream();
    }

    public function productsGraph() {
        $data = Productos::all();
        $labels = $data->pluck('name');
        $total = $data->pluck('stock');
        return response()->json([$labels, $total]);
    }
}
