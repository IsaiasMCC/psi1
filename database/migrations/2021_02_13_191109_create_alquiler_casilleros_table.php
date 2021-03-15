<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlquilerCasillerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquiler_casilleros', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('cantidad');
            $table->float('importe');
            $table->float('total');
            $table->unsignedBigInteger('casillero_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('administrador_id');
            $table->timestamps();

            $table->foreign('casillero_id')->on('casilleros')->references('id')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cliente_id')->on('clientes')->references('id')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('administrador_id')->on('administradores')->references('id')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquiler_casilleros');
    }
}
