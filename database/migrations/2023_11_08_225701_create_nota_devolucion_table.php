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
        Schema::create('nota_devolucion', function (Blueprint $table) {
            $table->string('motivo', 30);
            $table->timestamp('fecha_dev');
            $table->integer('nota_devolucionID')->primary();
            $table->integer('detalle_Nota_DevID')->index('detalle_Nota_DevID');
            $table->integer('facturaID')->index('facturaID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_devolucion');
    }
};
