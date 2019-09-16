<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('codealbum');
            $table->string('titre_album');
            $table->string('photo_couverture');
            $table->integer('nombre_morceau');
            $table->integer('annee_sortie');
            $table->boolean('favori');
            $table->boolean('in_playlist');
            $table->boolean('payant');
            $table->date('date_ajout');
            $table->integer('nombre_decoute');
            $table->integer('nombre_jaime');
            $table->integer('nombre_partage');
            $table->double('prix_album');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
