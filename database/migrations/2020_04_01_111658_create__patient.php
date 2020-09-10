<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Patients', function (Blueprint $table) {
            $table->increments('Id_pat');
            $table->foreign('Id_dossier')->references('Id')->on('DossierMedicals')->onDelete('cascade');
            $table->integer('CIN_pat');
            $table->text('Nom_pat');
            $table->text('Prenom_pat');
            $table->text('Date_naiss_pat');
            $table->text('Sex');
             $table->text('Profession');
             $table->text('Adresse_pat');
             $table->integer('Tel');
             $table->text('Antecedents');
             $table->text('Groupe_sanguine');
             $table->text('Code_APCI');
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
        Schema::dropIfExists('Patients');
    }
}
