<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        return Proveedor::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'contacto' => 'required',
        ]);

        return Proveedor::create($request->all());
    }

    public function show(Proveedor $proveedor)
    {
        return $proveedor;
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'nombre' => 'required',
            'contacto' => 'required',
        ]);

        $proveedor->update($request->all());

        return $proveedor;
    }

    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        return response()->noContent();
    }
}
