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
        Schema::table('detalle_pedido', function (Blueprint $table) {
            $table->foreign(['productoID'], 'FK_Detalle_Pedido_Producto')->references(['productoID'])->on('producto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['proveedorID'], 'FK_Detalle_Pedido_Proveedor')->references(['proveedorID'])->on('proveedor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_pedido', function (Blueprint $table) {
            $table->dropForeign('FK_Detalle_Pedido_Producto');
            $table->dropForeign('FK_Detalle_Pedido_Proveedor');
        });
    }
};
