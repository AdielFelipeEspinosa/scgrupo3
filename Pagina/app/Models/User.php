<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public $timestamps = false;
    
    protected $table = 'users';

    protected $primaryKey = "id_usuario";

    protected $fillable = [
        'login_usuario',
        'nombre_usuario',
        'email_usuario',
        'celular_usuario',
        'direccion_usuario',
        'password',
        'registro_usuario',
        'foto_usuario',
        'id_municipio_usuario',
        'id_perfil_usuario'
    ];
    protected $hidden = ['password'];


}