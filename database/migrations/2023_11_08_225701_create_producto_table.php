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
        Schema::create('producto', function (Blueprint $table) {
            $table->string('nombre_producto', 50);
            $table->string('descripcion', 50);
            $table->double('precio_venta');
            $table->integer('cantidad_stock');
            $table->string('cod_barra', 20);
            $table->string('imagen', 50);
            $table->string('adicional', 50);
            $table->timestamp('fecha_vencimiento');
            $table->integer('existencia_minimo');
            $table->integer('productoID')->primary();
            $table->integer('categoriaID')->index('categoriaID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
