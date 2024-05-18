<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'productos';

    /*
    protected $primaryKey = "id_producto";

    protected $fillable = [
        'nombre_producto	',
        'costo_producto',
        'descripcion_producto',
        'cantidad_producto',
        'link',
        'id_marca_producto',
        'id_talla_producto',
        'id_color_producto',
        'id_categoria_producto'
    ];
    */   
}