<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeAnalyseBio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandeAnalyseBios', function (Blueprint $table) {
            $table->increments('Id_demande_analyse_bio');
            $table->foreign('Id_consult')->references('Id')->on('Consultations')->onDelete('cascade');

            $table->date('Date_demande');
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
        Schema::dropIfExists('DemandeAnalyseBios');
    }
}
