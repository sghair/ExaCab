<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneDemande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LigneDemandes', function (Blueprint $table) {
            $table->increments('Id_ligne_demande_radio');
            $table->foreign('id_demande_radiot')->references('id')->on('DemandeRadios')->onDelete('cascade');
            $table->foreign('Id_examen_radio')->references('Id')->on('ExamenRadios')->onDelete('cascade');
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
        Schema::dropIfExists('LigneDemandes');
    }
}
