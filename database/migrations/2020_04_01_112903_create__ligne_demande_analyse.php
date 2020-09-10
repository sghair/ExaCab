<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneDemandeAnalyse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LigneDemandeAnalyses', function (Blueprint $table) {
            $table->increments('Id_demande_ligne_bio');
            $table->foreign('Id_demande_analyse_bio')->references('Id')->on('DemandeAnalyseBios')->onDelete('cascade');
            $table->foreign('Id_examen_analyse_bio')->references('Id')->on('ExamenAnalyseBios')->onDelete('cascade');

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
        Schema::dropIfExists('LigneDemandeAnalyses');
    }
}
