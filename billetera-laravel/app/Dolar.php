<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{

  protected $table = "dolar";

  protected $fillable = [
    'precio', 'fecha'
  ];

  public function billetera(){
    return $this->hasOne('App\Billetera');
  }

  public function gasto(){
    return $this->hasOne('App\Gasto');
  }

  public function ingreso(){
    return $this->hasOne('App\Ingreso');
  }
}
