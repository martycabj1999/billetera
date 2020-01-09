<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasto', function (Blueprint $table) {
            $table->increments('id');
            $table->float('monto');
            $table->date('fecha');
            $table->string('descripcion')->nullable();            
            $table->string('foto');
            $table->float('gasto_credito');
            $table->int('categoriaG_id');
            $table->int('dolar_id');
            $table->int('billetera_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gasto');
    }
}
