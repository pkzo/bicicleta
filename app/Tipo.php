<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
   protected $table = "tipo";

    protected $fillable = [
    		"nombre	","descripcion","marca_id"

    ];

    protected $guarded = [];

    public $timestamps = false;
 
}
