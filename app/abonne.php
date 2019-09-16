<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abonne extends Model
{
    public function Utilisateur()
    {
        return $this->belongsTo('App\utilisateur', 'utilisateur_code', 'code_utilisateur');
    }
}
