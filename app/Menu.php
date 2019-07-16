<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nombre', 'actividad' , 'inicio' , 'fin' , 'contador' , 'tiempo' , 'fecha' , 'terminado' , 'comentarios'];

}
