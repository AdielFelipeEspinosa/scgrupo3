<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'carritos';
    

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario_carrito');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto_carrito');
    }
}
