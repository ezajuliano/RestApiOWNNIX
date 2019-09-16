<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notificationutilisateur extends Model
{

    public function Utilisateur()
    {
        return $this->belongsTo('App\utilisateur', 'utilisateur_code', 'code_utilisateur');
    }

    public function Notification()
    {
        return $this->belongsTo('App\notification', 'notification_code', 'code_notification');
    }
}
