<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModalidadJuego;

class ModalidadJuegoController extends Controller
{
    public function index()
    {
        $modalidades = ModalidadJuego::all();
        return view('modalidades.index', compact('modalidades'));
    }

    public function create()
    {
        return view('modalidades.create');
    }

    public function store(Request $request)
    {
        // Agrega lógica para guardar una nueva modalidad de juego
    }

    public function show($id)
    {
        $modalidad = ModalidadJuego::find($id);
        return view('modalidades.show', compact('modalidad'));
    }

    public function edit($id)
    {
        $modalidad = ModalidadJuego::find($id);
        return view('modalidades.edit', compact('modalidad'));
    }

    public function update(Request $request, $id)
    {
        // Agrega lógica para actualizar la modalidad de juego
    }

    public function destroy($id)
    {
        // Agrega lógica para eliminar la modalidad de juego
    }
}

