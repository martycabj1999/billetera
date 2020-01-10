<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billetera extends Model
{
  protected $table = "billetera";

  protected $fillable = [
    'nombre',
    'balance',
    'total_credito'
  ];

  public function user()
  {
    return $this->hasOne('App\User');
  }

  public function ingreso()
  {
    return $this->belongsTo('App\Ingreso');
  }

  public function gasto()
  {
    return $this->belongsTo('App\Gasto');
  }

  public function dolar()
  {
    return $this->hasOne('App\Dolar');
  }
}
