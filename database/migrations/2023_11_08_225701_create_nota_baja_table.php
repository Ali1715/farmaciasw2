<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_baja', function (Blueprint $table) {
            $table->timestamp('fecha_dada_baja');
            $table->string('motivo', 30);
            $table->integer('nota_BajaID')->primary();
            $table->integer('detalle_Nota_BajaID')->index('detalle_Nota_BajaID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_baja');
    }
};
