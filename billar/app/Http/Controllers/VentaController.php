<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        // Agrega lógica para guardar una nueva venta
    }

    public function show($id)
    {
        $venta = Venta::find($id);
        return view('ventas.show', compact('venta'));
    }

    public function edit($id)
    {
        $venta = Venta::find($id);
        return view('ventas.edit', compact('venta'));
    }

    public function update(Request $request, $id)
    {
        // Agrega lógica para actualizar la venta
    }

    public function destroy($id)
    {
        // Agrega lógica para eliminar la venta
    }
}
