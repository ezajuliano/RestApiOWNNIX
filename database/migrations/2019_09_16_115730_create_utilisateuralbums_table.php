<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateuralbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateuralbums', function (Blueprint $table) {
            $table->date('date_achat_album');
            $table->unsignedInteger('utilisateur_code');
            $table->foreign('utilisateur_code')->references('code_utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->unsignedInteger('album_code');
            $table->foreign('album_code')->references('code_album')->on('album')->onDelete('cascade');
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
        Schema::dropIfExists('utilisateuralbums');
    }
}
