<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('start_time');//Hora de inicio
            $table->string('end_time');//Hora de fin 

            //Relacion con dia
            $table->ussignedBigInteger('day_id');
            $table->foreign('day_id')
                ->references('id')->on('days')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worships');
    }
}
