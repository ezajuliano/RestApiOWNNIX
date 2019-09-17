<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateurprofilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurprofils', function (Blueprint $table) {
            //$table->increments('id');
            $table->boolean('assigne');
            $table->date('dateattribution');
            $table->unsignedInteger('profil_code');
            $table->foreign('profil_code')->references('code_profil')->on('profils')->onDelete('cascade');
            $table->unsignedInteger('utilisateur_code');
            $table->foreign('utilisateur_code')->references('code_utilisateur')->on('utilisateurs')->onDelete('cascade');
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
        Schema::dropIfExists('utilisateurprofils');
    }
}
