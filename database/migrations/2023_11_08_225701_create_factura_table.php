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
        Schema::create('factura', function (Blueprint $table) {
            $table->integer('facturaID')->primary();
            $table->integer('nit');
            $table->timestamp('fecha');
            $table->double('total');
            $table->double('impuesto');
            $table->double('descuento');
            $table->double('subtotal');
            $table->string('nota', 30);
            $table->integer('clienteID')->index('clienteID');
            $table->integer('detalle_FacturaID')->index('detalle_FacturaID');
            $table->unsignedBigInteger('usuarioID')->index('usuarioID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
};
