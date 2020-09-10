<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescritAppareillage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PrescritAppareillages', function (Blueprint $table) {

            $table->integer('id_appareillage_medical');
            $table->foreign('id_demande_appareillage_medical')->references('id')->on('DemandeAppareillageMedicals')->onDelete('cascade');
            $table->text('code');
            $table->text('libelle');
            $table->integer('nombre');
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
        Schema::dropIfExists('PrescritAppareillages');
    }
}
