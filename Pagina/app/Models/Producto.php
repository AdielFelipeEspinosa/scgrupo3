<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'productos';

    protected $primaryKey = "id_producto";

    public function talla()
    {
        return $this->belongsTo(Talla::class, 'id_talla_producto');
    }
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca_producto');
    }
    public function color()
    {
        return $this->belongsTo(Color::class, 'id_color_producto');
    }
        public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria_producto');
    }
}