<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletasDeInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas_de_inscripciones', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inscripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->float('importe');
            $table->float('total');
            $table->unsignedBigInteger('descuento_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('administrador_id');
            $table->timestamps();

            $table->foreign('descuento_id')->on('descuentos')->references('id')
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
        Schema::dropIfExists('boletas_de_inscripciones');
    }
}
