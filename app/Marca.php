<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marcas";

    protected $fillable = [
    	"nombre_marca",
    	"origen"
    ];

    protected $guarded = [];

    public $timestamps = false;

}
