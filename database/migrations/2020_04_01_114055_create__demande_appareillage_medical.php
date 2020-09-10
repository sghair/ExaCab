<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeAppareillageMedical extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandeAppareillageMedicals', function (Blueprint $table) {
            $table->increments('Id_demande_appareillage_medicale');
            $table->foreign('Id_cnam')->references('Id')->on('CNAMs')->onDelete('cascade');
            $table->text('Donnees_clinique_paracliniques');
            $table->text('Diagnostic');
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
        Schema::dropIfExists('DemandeAppareillageMedicals');
    }
}
