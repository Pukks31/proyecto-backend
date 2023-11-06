<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumoProductos extends Model
{
    protected $table = 'consumo_productos';
    protected $primaryKey = 'id_consumo';
    public $timestamps = false;

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_pro', 'id_pro');
    }
}
