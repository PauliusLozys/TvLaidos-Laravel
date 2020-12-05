<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuria', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fk_tv_laida')->unsigned();
            $table->bigInteger('fk_kurejas')->unsigned();

        });

        Schema::table('kuria', function (Blueprint $table) {
            $table->foreign('fk_tv_laida')->references('id')->on('tv_laida')->onDelete('cascade');
            $table->foreign('fk_kurejas')->references('id')->on('kurejas')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuria');
    }
}
