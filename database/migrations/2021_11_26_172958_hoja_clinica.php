<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HojaClinica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hoja_clinica', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod_animal');
            $table->string('num_historia');
            $table->string('fecha_consulta');
            $table->string('fecha_registro');
            $table->string('nombre_mascota');
            $table->string('direccion');
            $table->string('correo');
            $table->string('telefono');
            $table->string('entorno');
            $table->string('tipo_animal');
            $table->string('acceso_salir');
            $table->string('paseos');
            $table->string('frec_paseos');
            
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
        //
    }
}
