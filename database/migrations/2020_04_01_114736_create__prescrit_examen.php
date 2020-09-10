<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescritExamen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PrescritExamens', function (Blueprint $table) {
            $table->increments('id_prescrit_examen');
            $table->foreign('id_demande_imagerie_medical')->references('id')->on('DemandeExamenImagerieMedicals')->onDelete('cascade');
            $table->text('code');
            $table->text('region');
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
        Schema::dropIfExists('PrescritExamens');
    }
}
