<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $table = 'juego';
    protected $primaryKey = 'id_juego';
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    public function modalidad()
    {
        return $this->belongsTo(ModalidadJuego::class, 'id_modalidad', 'id_modalidad');
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_juego', 'id_juego');
    }
}
