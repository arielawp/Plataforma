<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projecto extends Model
{
    protected $fillable = ['orden', 'nombre', 'actividad' , 'inicio' , 'fin' , 'contador' , 'tiempo' , 'fecha' , 'terminado' , 'comentarios'];
}
