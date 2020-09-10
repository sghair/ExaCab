<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCNAM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CNAMs', function (Blueprint $table) {
            $table->increments('Id_cnam');
            $table->foreign('Id_dossier')->references('Id')->on('DossierMedicals')->onDelete('cascade');
            $table->text('type_cnam');
            $table->date('Date_val');
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
        Schema::dropIfExists('CNAMs');
    }
}
