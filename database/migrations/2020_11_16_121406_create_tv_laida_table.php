<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvLaidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_laida', function (Blueprint $table) {
            $table->id();
            $table->string('pavadinimas');
            $table->string('aprasymas');
            $table->integer('trukme');
            $table->float('ziurovu_ivertinimas');
        });

        Schema::table('sezonas', function (Blueprint $table) {
            $table->foreign('fk_tv_laida')->references('id')->on('tv_laida')->onDelete('cascade');
        });

        Schema::table('kurejas', function (Blueprint $table) {
            $table->foreign('fk_tv_laida')->references('id')->on('tv_laida')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tv_laida');
    }
}
