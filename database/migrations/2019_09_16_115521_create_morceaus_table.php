<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMorceausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morceaus', function (Blueprint $table) {
            $table->increments('code_morceau');
            $table->string('titre');
            $table->string('duree');
            $table->boolean('favori');
            $table->boolean('in_playlist');
            $table->boolean('payant');
            $table->date('date_ajout');
            $table->integer('nombre_decoute');
            $table->integer('nombre_jaime');
            $table->integer('nombre_partage');
            $table->double('prix_morceau');
            $table->unsignedInteger('album_code');
            $table->foreign('album_code')->references('code_album')->on('album')->onDelete('cascade');
            $table->unsignedInteger('genre_code');
            $table->foreign('genre_code')->references('code_genre')->on('genre')->onDelete('cascade');
            $table->unsignedInteger('artiste_code');
            $table->foreign('artiste_code')->references('code_artiste')->on('artiste')->onDelete('cascade');
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
        Schema::dropIfExists('morceaus');
    }
}
