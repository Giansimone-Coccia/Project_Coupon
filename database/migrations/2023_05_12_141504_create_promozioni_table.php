<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromozioniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promozioni', function (Blueprint $table) {
            $table->string('idPromoAb', 20)->primary();
            $table->string('codOff',20);
            $table->date('dataScad');
            $table->int('percSconto');
            $table->string('utente',20);
            $table->foreign('utente')->references('username')->on('utenti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promozioni');
    }
};
