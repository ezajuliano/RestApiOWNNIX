<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    public function Profildroits()
    {
        return $this->hasMany('App\profildroit','profil_code', 'code_profil');
    }

    public function Utilisateurprofils()
    {
        return $this->hasMany('App\utilisateurprofil','profil_code', 'code_profil');
    }
}
