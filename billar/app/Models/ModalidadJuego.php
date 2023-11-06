<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalidadJuego extends Model
{
    protected $table = 'modalidad_juego';
    protected $primaryKey = 'id_modalidad';
    public $timestamps = false;
}
