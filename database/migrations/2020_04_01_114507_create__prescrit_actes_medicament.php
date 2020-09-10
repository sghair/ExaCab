<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescritActesMedicament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PrescritActesMedicaments', function (Blueprint $table) {
            $table->increments('Id_prescrit_act_medic');
            $table->foreign('Id_demande_prise_charge')->references('Id')->on('DemandePriseCharges')->onDelete('cascade');
            $table->text('code');
            $table->text('designantion');
            $table->integer('psologie');
            $table->integer('duree_traitement');
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
        Schema::dropIfExists('PrescritActesMedicaments');
    }
}
