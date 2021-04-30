<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacaCorEtiniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raca_cor_etinias', function (Blueprint $table) {
            $table->bigIncrements('id_raca_cor_etinia');
            $table->string('descricao_raca_cor_etinia',45)->nullable(false);
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
        Schema::dropIfExists('raca_cor_etinias');
    }
}
