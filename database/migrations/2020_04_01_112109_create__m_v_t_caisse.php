<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMVTCaisse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MVTCaisses', function (Blueprint $table) {
            $table->increments('Id_mvt');
            $table->foreign('Id_cab')->references('Id')->on('cabinets')->onDelete('cascade');
            $table->date('Date_mvt_caisse');
            $table->integer('Montant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MVTCaisses');
    }
}
