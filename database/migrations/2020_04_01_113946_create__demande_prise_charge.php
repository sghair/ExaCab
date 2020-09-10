<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandePriseCharge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandePriseCharges', function (Blueprint $table) {
            $table->increments('Id_demande_prise_charge');
            $table->foreign('Id_cnam')->references('Id')->on('CNAMs')->onDelete('cascade');
            $table->text('Donnees_clinique_paraclinique');
            $table->text('Diagnostic');
            $table->text('Nom_clinique');
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
        Schema::dropIfExists('DemandePriseCharges');
    }
}
