<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinRemboursement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BulletinRemboursements', function (Blueprint $table) {
            $table->increments('id_bulletin_remb');
            $table->foreign('Id_cnam')->references('Id')->on('CNAMs')->onDelete('cascade');
            $table->integer('APCI');
            $table->integer('MO');
            $table->integer('Hospitalisation');
            $table->integer('suivi_grossesse');
            $table->text('precision_code_APCI');
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
        Schema::dropIfExists('BulletinRemboursements');
    }
}
