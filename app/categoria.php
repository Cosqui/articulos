<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //nombre de la tabla en la base de datos

    protected $table = "categorias";

    // datos json de los que se podrán mostrar

    protected $fillable = ['name'];

    // tambien se definen aqui las relaciones
}
