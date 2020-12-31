<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name',300);
            $table->integer('age');
            $table->string('occupation',75);
            $table->string('name_of_spouses',200)->nullable();
            $table->string('address',350);
            $table->string('email')->unique()->nullable();
            $table->string('house_phone',8)->nullable();
            $table->string('office_phone',8)->nullable();
            $table->string('cell_phone',8);
            $table->string('whatsapp', 8)->nullable();
            $table->string('instagram',25)->nullable();
            $table->string('twitter',25)->nullable();
            $table->string('facebook',35)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
