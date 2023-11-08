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
        Schema::create('detalle_nota_dev', function (Blueprint $table) {
            $table->integer('cantidad');
            $table->string('observacion', 50);
            $table->integer('detalle_Nota_DevID')->primary();
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
        Schema::dropIfExists('detalle_nota_dev');
    }
};
