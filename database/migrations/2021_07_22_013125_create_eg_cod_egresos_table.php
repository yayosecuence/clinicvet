<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgCodEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eg_cod_egresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod_egreso');
            $table->string('estado');
            $table->string('cod_lote');
            $table->string('persona');
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
        Schema::dropIfExists('eg_cod_egresos');
    }
}
