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
        Schema::table('nota_baja', function (Blueprint $table) {
            $table->foreign(['detalle_Nota_BajaID'], 'FK_Nota_Baja_Detalle_Nota_Baja')->references(['detalle_Nota_BajaID'])->on('detalle_nota_baja')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nota_baja', function (Blueprint $table) {
            $table->dropForeign('FK_Nota_Baja_Detalle_Nota_Baja');
        });
    }
};
