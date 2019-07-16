<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diseno extends Model
{
    protected $fillable = ['orden', 'nombre', 'actividad' , 'inicio' , 'fin' , 'tiempo' , 'fecha' , 'terminado' , 'comentarios' ];

}
