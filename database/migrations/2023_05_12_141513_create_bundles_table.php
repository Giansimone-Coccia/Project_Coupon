<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBundlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundles', function (Blueprint $table) {
            $table->unsignedBigInteger('promoAbb');
            $table->unsignedBigInteger('offertaPromo');
            $table->primary(['promoAbb','offertaPromo']);
            $table->foreign('promoAbb')->references('id')->on('promozioni');
            $table->foreign('offertaPromo')->references('id')->on('offerte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bundles');
    }
};
