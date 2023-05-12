<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->string('codCoupon', 20);
            $table->string('utenteRich',30);
            $table->string('modFruiz', 30);
            $table->string('descProdOff',50);
            $table->date('dataScad');
            $table->string('offPromo',20)->primary();
            $table->string('utente',20)->primary();
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
        Schema::dropIfExists('coupons');
    }
};
