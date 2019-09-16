<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    public function Utilisateurprofils()
    {
        return $this->hasMany('App\utilisateurprofil','utilisateur_code', 'code_utilisateur');
    }
}
