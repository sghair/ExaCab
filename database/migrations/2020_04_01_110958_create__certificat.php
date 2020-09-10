<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Certificats', function (Blueprint $table) {
            $table->increments('id_certif');
            $table->foreign('Id_consult')->references('Id')->on('Consultations')->onDelete('cascade');
            $table->text('Com_certif');
            $table->date('Date_certif');
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
        Schema::dropIfExists('Certificats');
    }
}
