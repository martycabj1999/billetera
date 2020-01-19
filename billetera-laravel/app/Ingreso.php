<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
  protected $table = "ingreso";

  protected $fillable = [
    'monto', 'fecha', 'foto', 'descripcion', 'categoria_id', 'dolar_id',
    'billetera_id'
  ];

  public function billetera()
  {
    return $this->belongsTo('App\Billetera');
  }

  public function categoria_ingreso()
  {
    return $this->belongsTo('App\CategoriaIngreso');
  }

  public function dolar()
  {
    return $this->hasOne('App\Dolar');
  }
}
