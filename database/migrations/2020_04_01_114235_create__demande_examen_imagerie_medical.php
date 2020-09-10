<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeExamenImagerieMedical extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandeExamenImagerieMedicals', function (Blueprint $table) {
            $table->increments('Id_demande_imagerie_medicale');
            $table->foreign('Id_cnam')->references('Id')->on('CNAMs')->onDelete('cascade');
            $table->integer('scanner');
            $table->integer('IRM');
            $table->integer('scintigraphie');
            $table->integer('AutreActe');
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
        Schema::dropIfExists('DemandeExamenImagerieMedicals');
    }
}
