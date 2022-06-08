<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gatito extends Model
{
    use HasFactory;
    protected $table='animales';
    protected $fillable=[
        'nombre',
        'color',
        'tamaño',
        'raza',
        'sexo'
    ];
}

