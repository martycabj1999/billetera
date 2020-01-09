<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model{ 
    
  protected $table = "dolar";

  protected $fillable = [
    'precio',
    'fecha',
  ];

  public function billetera(){
    //Relacion de muchos usuarios de un perfil
    return $this->hasOne('App\Billetera');
  }

  public function gasto(){
    //Relacion de muchos usuarios de un perfil
    return $this->hasOne('App\Gasto');
  }

  public function ingreso(){
    //Relacion de muchos usuarios de un perfil
    return $this->hasOne('App\Ingreso');
  }
}