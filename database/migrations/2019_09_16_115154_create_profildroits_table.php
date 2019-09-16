<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfildroitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profildroits', function (Blueprint $table) {
            $table->boolean('assigne_droit');
            $table->unsignedInteger('droit_code');
            $table->foreign('droit_code')->references('code_droit')->on('droits')->onDelete('cascade');
            $table->unsignedInteger('profil_code');
            $table->foreign('profil_code')->references('code_profil')->on('profils')->onDelete('cascade');
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
        Schema::dropIfExists('profildroits');
    }
}
