<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{

  protected $table = "perfil";

  protected $fillable = [
    'nombre',
    'descripcion'
  ];

  public function User(){
    return $this->hasMany('App\User');
  }
}
