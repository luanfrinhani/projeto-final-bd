<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaVacinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_vacinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_sus',15)->nullable(false);
            $table->bigInteger('lote_vacina')->nullable(false);
            $table->date('data_dose')->nullable(false);
            $table->bigInteger('dose')->nullable(false);


            $table->foreign('numero_sus')->references('numero_sus')->on('pessoas')->onDelete('cascade');




            $table->index('lote_vacina');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_vacinas');
    }
}
