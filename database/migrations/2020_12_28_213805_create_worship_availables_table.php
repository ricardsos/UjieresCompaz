<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorshipAvailablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worship_availables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Relacion con Culto (Worship)
            $table->ussignedBigInteger('worship_id');
            $table->foreign('worship_id')
                ->references('id')->on('worships')
                ->onDelete('cascade');
 
            //Relacion con Formulario (Forms)
            $table->ussignedBigInteger('form_id');
            $table->foreign('form_id')
                ->references('id')->on('forms')
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
        Schema::dropIfExists('worship_availables');
    }
}
