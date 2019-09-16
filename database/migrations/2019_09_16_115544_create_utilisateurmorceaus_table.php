<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateurmorceausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurmorceaus', function (Blueprint $table) {
            $table->date('date_achat_morceau');
            $table->unsignedInteger('utilisateur_code');
            $table->foreign('utilisateur_code')->references('code_utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->unsignedInteger('morceau_code');
            $table->foreign('morceau_code')->references('code_morceau')->on('morceau')->onDelete('cascade');
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
        Schema::dropIfExists('utilisateurmorceaus');
    }
}
