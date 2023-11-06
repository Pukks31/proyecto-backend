<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsumoProductos;

class ConsumoProductosController extends Controller
{
    public function index()
    {
        $consumos = ConsumoProductos::all();
        return view('consumos.index', compact('consumos'));
    }

    public function create()
    {
        return view('consumos.create');
    }

    public function store(Request $request)
    {
        // Agrega lógica para guardar un nuevo consumo de productos
    }

    public function show($id)
    {
        $consumo = ConsumoProductos::find($id);
        return view('consumos.show', compact('consumo'));
    }

    public function edit($id)
    {
        $consumo = ConsumoProductos::find($id);
        return view('consumos.edit', compact('consumo'));
    }

    public function update(Request $request, $id)
    {
        // Agrega lógica para actualizar el consumo de productos
    }

    public function destroy($id)
    {
        // Agrega lógica para eliminar el consumo de productos
    }
}
