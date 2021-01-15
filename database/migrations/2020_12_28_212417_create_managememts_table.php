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

            //Relacion con formulario
            $table->foreignId('form_by_id')
                ->constraidned('forms')
                ->onDelete('cascade');

            //Relacion con usuario
            $table->foreignId('user_id')
                ->constraidned('users')
                ->onDelete('cascade');

            //Relacion con usuario
            $table->foreignId('created_by_id')
                ->constraidned('users')
                ->nullable()
                ->onDelete('cascade');

            $table->foreignId('update_by_id')
                ->constraidned('users')
                ->nullable()
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
