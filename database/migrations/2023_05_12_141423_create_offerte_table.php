<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerte', function (Blueprint $table) {
            $table->string('codOfferta', 20)->primary();
            $table->string('oggettoOff',30);
            $table->string('modalita', 30);
            $table->string('tempoFruiz',30);
            $table->string('luogoFruiz',30);
            $table->string('nomeOff',25);
            $table->text('logoOff');
            $table->string('azienda',30);
            $table->string('utente',30);
            $table->foreign('azienda')->references('codiceA')->on('aziende');
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
        Schema::dropIfExists('offerte');
    }
};
