<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaIngreso extends Model
{
  protected $table = "categoria_ingreso";

  protected $fillable = [
    'nombre',
    'descripcion'
  ];

  public function ingreso()
  {
    return $this->hasMany('App\Ingreso');
  }
}
