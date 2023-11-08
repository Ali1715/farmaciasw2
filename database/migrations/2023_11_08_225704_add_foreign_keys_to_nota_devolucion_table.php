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
        Schema::table('nota_devolucion', function (Blueprint $table) {
            $table->foreign(['detalle_Nota_DevID'], 'FK_Nota_devolucion_Detalle_Nota_Dev')->references(['detalle_Nota_DevID'])->on('detalle_nota_dev')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['facturaID'], 'FK_Nota_devolucion_Factura')->references(['facturaID'])->on('factura')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nota_devolucion', function (Blueprint $table) {
            $table->dropForeign('FK_Nota_devolucion_Detalle_Nota_Dev');
            $table->dropForeign('FK_Nota_devolucion_Factura');
        });
    }
};
