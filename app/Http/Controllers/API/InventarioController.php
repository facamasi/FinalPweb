<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        return Inventario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'cantidad' => 'required|integer',
        ]);

        return Inventario::create($request->all());
    }

    public function show(Inventario $inventario)
    {
        return $inventario;
    }

    public function update(Request $request, Inventario $inventario)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'cantidad' => 'required|integer',
        ]);

        $inventario->update($request->all());

        return $inventario;
    }

    public function destroy(Inventario $inventario)
    {
        $inventario->delete();

        return response()->noContent();
    }
}
