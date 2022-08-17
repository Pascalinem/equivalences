<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_demandes', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_demande');
            $table->date('date_demande');
            $table->string('type_demande');
            $table->float('montant_frais');
            $table->boolean('refugie_reconnu');
            $table->boolean('actiris');
            $table->boolean('vdab');
            $table->boolean('statut');
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
        Schema::dropIfExists('dossier_demandes');
    }
}
