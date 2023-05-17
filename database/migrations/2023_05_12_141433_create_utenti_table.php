<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utenti', function (Blueprint $table) {
            $table->string('username', 20)->primary();
            $table->string('password',30);
            $table->string('nome', 30);
            $table->string('cognome',30);
            $table->char('genere');
            $table->date('dataNascita');
            $table->string('email',30);
            $table->string('telefono',15);
            $table->string('ruolo',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utenti');
    }
};
