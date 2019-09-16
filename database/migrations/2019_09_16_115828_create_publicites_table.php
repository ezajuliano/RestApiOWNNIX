<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicites', function (Blueprint $table) {
            $table->increments('id_publicite');
            $table->string('libelle_publicite');
            $table->string('description');
            $table->string('photo_publicite');
            $table->date('date_ajout_publicite');
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
        Schema::dropIfExists('publicites');
    }
}
