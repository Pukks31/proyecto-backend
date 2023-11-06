<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoriaPro extends Model
{
    protected $table = 'categoria_pro';
    protected $primaryKey = 'id_cat_pro';
    public $timestamps = false;

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_cat_pro', 'id_cat_pro');
    }
}
