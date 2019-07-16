<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = ['nombre', 'actividad' , 'inicio' , 'fin' , 'contador' , 'tiempo' , 'fecha' , 'terminado' , 'comentarios'];
}
