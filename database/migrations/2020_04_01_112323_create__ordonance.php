<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ordonances', function (Blueprint $table) {
            $table->increments('Id_ord');
         
            $table->foreign('Id_consult')->references('Id')->on('Consultations')->onDelete('cascade');

            $table->integer('Id_pat');
            $table->float('Nom_medic');
            $table->text('Forme_medic');
            $table->text('Dossage_medic');
            $table->text('Pasologie_medic');
            $table->integer('Qte_medic');
            $table->date('Date_ordonance');
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
        Schema::dropIfExists('Ordonances');
    }
}
