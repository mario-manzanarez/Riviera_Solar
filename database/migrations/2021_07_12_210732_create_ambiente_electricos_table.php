<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbienteElectricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambiente_electricos', function (Blueprint $table) {
            $table->id();
            $table->string('canalizacion_DC');
            $table->string('trayectoria_dc');
            $table->string('ubicacion_centro');
            $table->string('capacidad_interruptor');
            $table->string('interconexion');
            $table->integer('tierra_fisica');
            $table->string('canalizacion_AC');
            $table->string('trayectoria_AC');
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
        Schema::dropIfExists('ambiente_electricos');
    }
}
