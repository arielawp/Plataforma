<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['orden', 'nombre', 'actividad' , 'inicio' , 'fin' , 'tiempo' , 'fecha' , 'terminado' , 'comentarios' , 'auxi'];

}
