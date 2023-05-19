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
            $table->unsignedBigInteger('offPromo');
            $table->unsignedBigInteger('utenteRich');
            $table->primary(['offPromo','utenteRich']);
            $table->foreign('utenteRich')->references('id')->on('users');
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
