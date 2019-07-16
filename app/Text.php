<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $fillable = ['nombre', 'actividad' , 'inicio' , 'fin' , 'contador' , 'tiempo' , 'fecha' , 'terminado' , 'comentarios'];

}
