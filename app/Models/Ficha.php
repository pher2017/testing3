<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

     protected $fillable = [
        'rut',
        'nombres',
        'apellidos',
        'direccion',
        'ciudad',
        'telefono',
        'email',
        'fecha_nacimiento',
        'estado_civil',
        'comentarios'
    ];
    protected $table = 'fichas';
}
