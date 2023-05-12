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
            $table->string('promoAbb', 20)->primary();
            $table->string('offfertaPromo',20)->primary();
            $table->foreign('promoAbb')->references('idPromoAb')->on('promozioni');
            $table->foreign('offfertaPromo')->references('codOfferta')->on('offerte');
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
