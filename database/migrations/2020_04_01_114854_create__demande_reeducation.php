<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeReeducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandeReeducations', function (Blueprint $table) {
            $table->increments('id_demande_reeducation');
            $table->foreign('Id_cnam')->references('Id')->on('CNAMs')->onDelete('cascade');
            $table->date('Duree_jour');
            $table->date('Date');
            $table->integer('fois_seances');
            $table->integer('Nbr_total_seances');
            $table->integer('demande_initiale');
            $table->integer('renouvellable');
            $table->text('pathologie');
            $table->text('traitement');
            $table->text('Etat_sante_generale');
            $table->text('Bilan_fonctionnel');
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
        Schema::dropIfExists('DemandeReeducations');
    }
}
