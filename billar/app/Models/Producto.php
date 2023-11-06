<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id_pro';
    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo(CategoriaPro::class, 'id_cat_pro', 'id_cat_pro');
    }

    public function consumos()
    {
        return $this->hasMany(ConsumoProductos::class, 'id_pro', 'id_pro');
    }
}
