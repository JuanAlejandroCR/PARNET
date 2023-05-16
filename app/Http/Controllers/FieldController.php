<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FieldController extends Controller
{
    public function index()
    {
        return view('areas.index');
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $field = Field::create($request->all());
        return response()->json($field);
    }

    public function edit(int $field)
    {
        $field = Field::find($field);
        return view('areas.edit', compact('field'));
    }

    public function update(Request $request, int $field)
    {
        $field = Field::find($field);
        $field->update($request->all());
        return response()->json($field);
    }

    public function destroy(int $field)
    {
        $field = Field::find($field)->delete();
    }

    public function getFields() {
        $fields = Field::all();
        return DataTables::of($fields)->make(true);
    }
}
