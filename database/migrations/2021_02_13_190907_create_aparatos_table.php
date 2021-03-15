<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAparatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aparatos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sala_id');
            $table->string('nombre', 30);
            $table->string('marca', 30)->nullable();
            $table->string('modelo', 30)->nullable();
            $table->unsignedBigInteger('estado_id');
            $table->timestamps();

            $table->foreign('sala_id')->on('salas')->references('id')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estado_id')->on('estados')->references('id')
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
        Schema::dropIfExists('aparatos');
    }
}
