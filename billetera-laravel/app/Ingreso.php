<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
  protected $table = "ingreso";

  protected $fillable = [
    'nombre',
    'fecha',
    'foto',
    'descripcion'
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
