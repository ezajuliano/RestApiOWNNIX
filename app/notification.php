<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    public function Notificationutilisateurs()
    {
        return $this->hasMany('App\notificationutilisateur','notification_code', 'code_notification');
    }

}
