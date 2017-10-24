<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    //
    protected  $table = "articulos";

    protected  $fillable = ['title','content','categoria_id','user_id'];
}
