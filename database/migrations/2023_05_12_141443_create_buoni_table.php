<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buoni', function (Blueprint $table) {
            $table->string('codCoupon', 20);
            $table->date('dataScad');
            $table->string('offPromo',20)->primary();
            $table->string('utenteRich',20)->primary();
            $table->foreign('utenteRich')->references('username')->on('utenti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buoni');
    }
};
