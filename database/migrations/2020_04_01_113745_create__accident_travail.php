<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentTravail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AccidentTravails', function (Blueprint $table) {
            $table->increments('Id_accident_travail');
            $table->foreign('Id_cnam')->references('Id')->on('CNAMs')->onDelete('cascade');
            $table->integer('initial');
            $table->integer('de_prolongation');
            $table->integer('de_rechutte');
            $table->integer('de_guerison');
            $table->integer('de_consolidation');
            $table->date('Date_accident');
            $table->text('Nature_lesions');
            $table->date('Duree_soins_jour');
            $table->date('duree_hospitalisation');
            $table->text('lieu_hospitalisation');
            $table->date('Date_arret_travailt');
            $table->date('Date_reprise_travailt');
            $table->date('Date_guerison');
            $table->text('consolidation_lesions');
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
        Schema::dropIfExists('AccidentTravails');
    }
}
