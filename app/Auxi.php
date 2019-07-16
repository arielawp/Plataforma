<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auxi extends Model
{
    protected $fillable = ['nombre', 'actividad' , 'inicio' , 'fin' , 'contador' , 'tiempo' , 'fecha' , 'terminado' , 'comentarios' , 'auxi'];
}
