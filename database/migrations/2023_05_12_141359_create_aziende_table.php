<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAziendeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aziende', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->index();
            $table->string('nome', 30);
            $table->string('localizzazione', 40);
            $table->string('ragSoc', 10);
            $table->text('image');
            $table->string('tipologia',20);
            $table->string('descAzienda', 255);
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
        Schema::dropIfExists('aziende');
    }
};
