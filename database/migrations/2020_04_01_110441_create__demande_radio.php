<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeRadio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandeRadios', function (Blueprint $table) {
            $table->increments('id_demande_radio');
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
        Schema::dropIfExists('DemandeRadios');
    }
}
