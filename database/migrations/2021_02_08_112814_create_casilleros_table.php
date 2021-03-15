<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasillerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casilleros', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->string('tiempo');
            $table->float('costo');
            $table->unsignedBigInteger('estado_id');
            $table->timestamps();

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
        Schema::dropIfExists('casilleros');
    }
}
