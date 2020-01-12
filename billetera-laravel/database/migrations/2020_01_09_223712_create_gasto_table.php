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
            $table->float('monto',10,2);
            $table->date('fecha');
            $table->string('descripcion')->nullable();            
            $table->string('foto')->nullable();
            $table->boolean('gasto_credito');
            $table->integer('categoria_gasto_id');
            $table->integer('dolar_id');
            $table->integer('billetera_id');
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
