<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    public function index()
    {
        return Transaccion::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|in:entrada,salida',
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer',
            'fecha' => 'required|date',
        ]);

        return Transaccion::create($request->all());
    }

    public function show(Transaccion $transaccion)
    {
        return $transaccion;
    }

    public function update(Request $request, Transaccion $transaccion)
    {
        $request->validate([
            'tipo' => 'required|in:entrada,salida',
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer',
            'fecha' => 'required|date',
        ]);

        $transaccion->update($request->all());

        return $transaccion;
    }

    public function destroy(Transaccion $transaccion)
    {
        $transaccion->delete();

        return response()->noContent();
    }
}
