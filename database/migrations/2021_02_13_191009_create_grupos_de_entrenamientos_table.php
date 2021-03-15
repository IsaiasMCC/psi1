<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposDeEntrenamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_de_entrenamientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 10);
            $table->integer('cupo');
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->timestamps();

            $table->foreign('instructor_id')->on('instructores')->references('id')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('disciplina_id')->on('disciplinas')->references('id')
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
        Schema::dropIfExists('grupos_de_entrenamientos');
    }
}
