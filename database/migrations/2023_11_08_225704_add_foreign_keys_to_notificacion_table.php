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
        Schema::table('notificacion', function (Blueprint $table) {
            $table->foreign(['pedido_ProductoID'], 'FK_Notificacion_Pedido_Producto')->references(['pedido_ProductoID'])->on('pedido_producto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['usuarioID'], 'FK_Notificacion_Users')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notificacion', function (Blueprint $table) {
            $table->dropForeign('FK_Notificacion_Pedido_Producto');
            $table->dropForeign('FK_Notificacion_Users');
        });
    }
};
