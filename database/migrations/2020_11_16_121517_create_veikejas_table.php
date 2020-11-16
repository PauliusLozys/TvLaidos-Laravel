<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeikejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veikejas', function (Blueprint $table) {
            $table->id();
            $table->string('vardas');
            $table->bigInteger('fk_aktorius')->unsigned();
            $table->bigInteger('fk_tv_laida')->unsigned();

            $table->foreign('fk_aktorius')->references('id')->on('aktorius');
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
        Schema::dropIfExists('veikejas');
    }
}
