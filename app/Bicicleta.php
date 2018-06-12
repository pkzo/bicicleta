<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    protected $table = "bicicletas";

    protected $fillable = [
    	"tipo_bici","tamaño_rin","tamaño_marco","color","tipo_id"
    ];

    protected $guarded = [];

    public $timestamps = false;

    public function tipo(){
    	return $this->belongsTo(Tipo::class, 'tipo_id');
    }
  //
}
