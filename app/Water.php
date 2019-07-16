<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    protected $fillable = ['orden', 'nombre', 'actividad' , 'inicio' , 'fin' , 'tiempo' , 'fecha' , 'terminado' , 'comentarios' ];
}

