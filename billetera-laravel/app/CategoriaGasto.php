<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaGasto extends Model
{

  protected $table = "categoria_gasto";

  protected $fillable = [
    'nombre',
    'descripcion'
  ];

  public function gasto()
  {
    return $this->hasMany('App\Gasto');
  }
}
