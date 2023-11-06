<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaPro;

class CategoriaProController extends Controller
{
    public function index()
    {
        $categorias = CategoriaPro::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        // Agrega lógica para guardar una nueva categoría
    }

    public function show($id)
    {
        $categoria = CategoriaPro::find($id);
        return view('categorias.show', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = CategoriaPro::find($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        // Agrega lógica para actualizar la categoría
    }

    public function destroy($id)
    {
        // Agrega lógica para eliminar la categoría
    }
}
