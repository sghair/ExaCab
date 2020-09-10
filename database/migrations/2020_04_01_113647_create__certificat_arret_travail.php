<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatArretTravail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CertificatArretTravails', function (Blueprint $table) {
            $table->increments('Id_cert_arret_travail');
            $table->foreign('Id_cnam')->references('Id')->on('CNAMs')->onDelete('cascade');
            $table->integer('Duree_jours');
            $table->date('Date');
            $table->integer('Periode_initial');
            $table->integer('Prolongation');
            $table->text('conclusion');
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
        Schema::dropIfExists('CertificatArretTravails');
    }
}
