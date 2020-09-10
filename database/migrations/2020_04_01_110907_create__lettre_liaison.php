<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettreLiaison extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LettreLiaisons', function (Blueprint $table) {
            $table->increments('id_lettre');
            $table->foreign('Id_consult')->references('Id')->on('Consultations')->onDelete('cascade');
            $table->text('Nom_conf');
            $table->text('Specialite');
            $table->text('Etat_sante_pat');
            $table->date('Date');
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
        Schema::dropIfExists('LettreLiaisons');
    }
}
