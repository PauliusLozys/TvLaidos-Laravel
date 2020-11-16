<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurejas', function (Blueprint $table) {
            $table->id();
            $table->string('vardas');
            $table->string('pavarde');
            $table->string('role');
            $table->boolean('lytis');
            $table->bigInteger('fk_tv_laida')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurejas');
    }
}
