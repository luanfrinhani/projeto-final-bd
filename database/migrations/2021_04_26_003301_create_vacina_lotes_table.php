<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacinaLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacina_lotes', function (Blueprint $table) {
            $table->bigInteger('lote_vacina')->nullable(false);
            $table->unsignedBigInteger('id_vacina')->nullable(false);
            $table->date('data_compra')->nullable(false);
            $table->date('data_fabricacao')->nullable(false);
            $table->date('data_validade')->nullable(false);
            $table->timestamps();

            $table->foreign('id_vacina')->references('id_vacina')->on('vacinas');

            $table->index('id_vacina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacina_lotes');
    }
}
