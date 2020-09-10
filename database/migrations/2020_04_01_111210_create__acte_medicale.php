<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActeMedicale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ActeMedicales', function (Blueprint $table) {
            $table->increments('id_acte_medicale');
            $table->foreign('Id_consult')->references('Id')->on('Consultations')->onDelete('cascade');
            $table->text('Code_acte');
            $table->float('cotisation');
            $table->text('honoraire');
            $table->date('Date_acte');
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
        Schema::dropIfExists('ActeMedicales');
    }
}
