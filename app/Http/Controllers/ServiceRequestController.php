<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Noticias;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiceRequestController extends Controller
{
       public function index()
    {
        return view('solicitudesServicio.index');
    }

    public function create()
    {
        $fields = Field::all();
        return view('solicitudesServicio.create', compact('fields'));
    }

    public function store(Request $request)
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return response()->json('CAPTCHA incorrecto', 429);
        } else {
            $serviceRequest = ServiceRequest::create($request->except('captcha'));
            return response()->json($serviceRequest);
        }
    }

    public function destroy(int $serviceRequest)
    {
        ServiceRequest::find($serviceRequest)->delete();
    }

    public function getServicesRequests()
    {
        $servicesRequests = ServiceRequest::with('field')->get();
        return DataTables::of($servicesRequests)->make(true);
    }
}
