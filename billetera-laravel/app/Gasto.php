<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model{ 
    
  protected $table = "gasto";

  protected $fillable = [
    'monto', 'fecha', 'descripcion', 'foto', 
    'gasto_credito', 'categoriaG_id', 'dolar_id',
    'billetera_id'
  ];

  public function billetera(){
    //Relacion de muchos usuarios de un perfil
    return $this->belongsTo('App\Billetera');
  }

  public function categoria_gasto(){
    //Relacion de muchos usuarios de un perfil
    return $this->belongsTo('App\CategoriaGasto');
  }

  public function dolar(){
    //Relacion de muchos usuarios de un perfil
    return $this->hasOne('App\Dolar');
  }

}