<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_id');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('dia',10);
            $table->unsignedBigInteger('sala_id');
            $table->timestamps();

            $table->foreign('grupo_id')->on('grupos_de_entrenamientos')->references('id')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sala_id')->on('salas')->references('id')
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
        Schema::dropIfExists('horarios');
    }
}
