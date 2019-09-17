<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    public function Utilisateurprofils()
    {
        return $this->hasMany('App\utilisateurprofil','utilisateur_code', 'code_utilisateur');
    }

    public function Notificationutilisateurs()
    {
        return $this->hasMany('App\notificationutilisateur','utilisateur_code', 'code_utilisateur');
    }

    public function Syslogs()
    {
        return $this->hasMany('App\syslog','utilisateur_code', 'code_utilisateur');
    }

    public function Abonnes()
    {
        return $this->hasMany('App\abonne','utilisateur_code', 'code_utilisateur');
    }

    public function Utilisateurmorceaus()
    {
        return $this->hasMany('App\utilisateurmorceau','utilisateur_code', 'code_utilisateur');
    }

    public function Utilisateuralbums()
    {
        return $this->hasMany('App\utilisateuralbum','utilisateur_code', 'code_utilisateur');
    }
}
