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
        Schema::create('inventario', function (Blueprint $table) {
            $table->timestamp('fecha_ingreso');
            $table->integer('cantidad_ingresada');
            $table->double('total_costo');
            $table->integer('inventarioID')->primary();
            $table->integer('detalle_InventarioID')->index('detalle_InventarioID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
};
