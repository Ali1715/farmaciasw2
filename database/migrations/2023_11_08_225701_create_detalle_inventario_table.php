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
        Schema::create('detalle_inventario', function (Blueprint $table) {
            $table->integer('cantidad');
            $table->integer('numero_lote');
            $table->double('precio_compra');
            $table->timestamp('fecha_venc_lote');
            $table->integer('detalle_InventarioID')->primary();
            $table->integer('proveedorID')->index('proveedorID');
            $table->integer('productoID')->index('productoID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_inventario');
    }
};
