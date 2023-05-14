<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domande', function (Blueprint $table) {
            $table->string('idFaq', 20)->primary();
            $table->string('domanda',100);
            $table->string('risposta', 255);
            $table->date('dataPub');
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
        Schema::dropIfExists('faqs');
    }
};
