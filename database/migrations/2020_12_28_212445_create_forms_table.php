<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->boolean('acep_cristo');
            $table->string('acep_cristo_tiempo',10)->nullable();
            $table->boolean('bautizado');
            $table->string('bautizado_tiempo',10)->nullable();
            $table->string('tiempo_congregarse_compaz',10);
            $table->boolean('hoja_membresia');
            $table->string('iglesia_anterior',50)->nullable();
            $table->boolean('otro_ministerio');
            $table->string('otro_ministerio_cual',50)->nullable();
            $table->boolean('bautismo_espiritu_santo');
            $table->string('motivo_para_servir',500);
            $table->boolean('asiste_celula');
            $table->string('cual_celula',30)->nullable();
            $table->string('nombre_lider',50)->nullable();
            $table->string('anfitrion',50)->nullable();
            $table->string('quien_hablo_ministerio',50);
            $table->string('referencia_de_usted',50);
            $table->string('fecha');
            $table->string('estado',10);

            //Relacion con Persona (People)
            $table->ussignedBigInteger('people_id');
            $table->foreign('people_id')
                ->references('id')->on('people')
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
        Schema::dropIfExists('forms');
    }
}
