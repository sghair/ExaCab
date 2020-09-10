<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Consultations', function (Blueprint $table) {
            $table->increments('Id_consult');
            $table->foreign('Id_dossier')->references('Id')->on('DossierMedicals')->onDelete('cascade');
            $table->text('designation');
            $table->text('Motif');
            $table->text('Taille');
            $table->integer('Poids');
             $table->text('Tension');
             $table->text('Temperature');
             $table->date('Date_consult');
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
        Schema::dropIfExists('Consultations');
    }
}
