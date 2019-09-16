<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateurmorceau extends Model
{
    public function Utilisateur()
    {
        return $this->belongsTo('App\utilisateur', 'utilisateur_code', 'code_utilisateur');
    }
    public function Morceau()
    {
        return $this->belongsTo('App\morceau', 'morceau_code', 'code_morceau');
    }
}
