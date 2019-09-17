<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationutilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificationutilisateurs', function (Blueprint $table) {
            $table->boolean('expire');
            $table->date('datevue');
            $table->unsignedInteger('utilisateur_code');
            $table->foreign('utilisateur_code')->references('code_utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->unsignedInteger('notification_code');
            $table->foreign('notification_code')->references('code_notification')->on('notifications')->onDelete('cascade');
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
        Schema::dropIfExists('notificationutilisateurs');
    }
}
