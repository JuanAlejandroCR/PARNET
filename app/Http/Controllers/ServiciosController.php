<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ServiciosController extends Controller
{
    public function index()
    {
        return view('servicios.index');
    }

    public function create()
    {
        $fields = Field::all();
        return view('servicios.create', compact('fields'));
    }

    public function store(Request $request)
    {
        $servicios = Servicios::create($request->all());
        return response()->json($servicios);
    }

    public function edit(int $servicio)
    {
        $servicio = Servicios::find($servicio);
        $fields = Field::all();
        return view('servicios.edit', compact('servicio', 'fields'));
    }

    public function update(Request $request, int $servicio)
    {
        $servicio = Servicios::find($servicio);
        $servicio->update($request->all());
        return response()->json($servicio);
    }

    public function destroy(int $servicio)
    {
        Servicios::find($servicio)->delete();
    }

    public function getServices()
    {
        $servicios = Servicio::with('field')->get();
        return DataTables::of($servicios)->make(true);
    }

    public function servicesByFieldGraph()
    {
        $data = DB::table('fields')->select('fields.field', DB::raw('count(*) as total'))->join('services', 'fields.id', '=', 'services.field_id')->groupBy('services.field_id')->get();
        
        $labels = $data->pluck('field');
        $total =$data->pluck('total');

        return response()->json([$labels, $total]);
    }
}
