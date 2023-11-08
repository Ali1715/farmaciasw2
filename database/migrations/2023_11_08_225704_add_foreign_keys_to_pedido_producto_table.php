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
        Schema::table('pedido_producto', function (Blueprint $table) {
            $table->foreign(['detalle_PedidoID'], 'FK_Pedido_Producto_Detalle_Pedido')->references(['detalle_PedidoID'])->on('detalle_pedido')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedido_producto', function (Blueprint $table) {
            $table->dropForeign('FK_Pedido_Producto_Detalle_Pedido');
        });
    }
};
