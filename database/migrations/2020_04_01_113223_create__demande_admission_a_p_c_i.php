<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeAdmissionAPCI extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandeAdmissionAPCIs', function (Blueprint $table) {
            $table->increments('Id_admission');
            $table->foreign('Id_cnam')->references('Id')->on('CNAMs')->onDelete('cascade');
            $table->text('Nom_prenom_med');
            $table->text('Diagnostic');
            $table->text('Observation');
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
        Schema::dropIfExists('DemandeAdmissionAPCIs');
    }
}
