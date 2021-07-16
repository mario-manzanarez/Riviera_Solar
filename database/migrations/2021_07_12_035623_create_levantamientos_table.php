<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevantamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levantamientos', function (Blueprint $table) {
            $table->id();
            $table->string('fachada');
            $table->string('medidor');
            $table->string('azotea');
            $table->string('objeto_afecta');
            $table->string('perforacion');
            $table->string('material');
            $table->string('espesor');
            $table->string('recubrimiento');
            $table->string('metodo');
            $table->string('inversor');
            $table->integer('posicion_inversor');
            $table->foreignId('visita_id')->references('id')->on('visitas');
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
        Schema::dropIfExists('levantamientos');
    }
}
