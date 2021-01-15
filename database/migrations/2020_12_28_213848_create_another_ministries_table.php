<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnotherMinistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('another_ministries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Relación con culto
            $table->foreignId('worship_id')
                ->constraidned('worships')
                ->onDelete('cascade');

            //Relación con formulario
            $table->foreignId('form_id')
            ->constraidned('forms')
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
        Schema::dropIfExists('another_ministries');
    }
}
