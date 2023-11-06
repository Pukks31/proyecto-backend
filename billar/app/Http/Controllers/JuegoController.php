<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class JuegoController extends Controller
{
    public function index()
    {
        $juegos = Juego::all();
        return view('juegos.index', compact('juegos'));
    }

    public function create()
    {
        return view('juegos.create');
    }

    public function store(Request $request)
    {
        // Agrega lógica para guardar un nuevo juego
    }

    public function show($id)
    {
        $juego = Juego::find($id);
        return view('juegos.show', compact('juego'));
    }

    public function edit($id)
    {
        $juego = Juego::find($id);
        return view('juegos.edit', compact('juego'));
    }

    public function update(Request $request, $id)
    {
        // Agrega lógica para actualizar el juego
    }

    public function destroy($id)
    {
        // Agrega lógica para eliminar el juego
    }
}

