<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagen extends Model
{
    //
    protected $table = "imagenes";

    protected  $fillable = ['name','articulo_id'];
}
