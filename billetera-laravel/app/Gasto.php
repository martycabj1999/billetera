<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{

  protected $table = "gasto";

  protected $fillable = [
    'monto', 'fecha', 'descripcion', 'foto', 'gasto_credito', 'categoria_gasto_id',
    'dolar_id', 'billetera_id'
  ];

  public function billetera(){
    return $this->belongsTo('App\Billetera');
  }

  public function categoria_gasto(){
    return $this->belongsTo('App\CategoriaGasto');
  }

  public function dolar(){
    return $this->hasOne('App\Dolar');
  }
}
