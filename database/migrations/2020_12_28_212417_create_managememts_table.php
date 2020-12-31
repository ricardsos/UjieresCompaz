<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagememtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managememts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('answer_date');
            $table->string('note',150)->nullable();

            //Relacion con Usuario (User)
            $table->ussignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('managememts');
    }
}
