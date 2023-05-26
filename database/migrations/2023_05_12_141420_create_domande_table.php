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
            $table->bigIncrements('id')->unsigned()->index();
            $table->string('domanda',255);
            $table->string('risposta', 255);
            $table->date('dataPub');
            $table->unsignedBigInteger('utente')->nullable();
            $table->foreign('utente')->references('id')->on('users')->nullOnDelete();
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
