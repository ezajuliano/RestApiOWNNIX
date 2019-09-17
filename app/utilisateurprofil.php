<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateurprofil extends Model
{
    protected $fillable = ['profil_code'];

    public function Profil()
    {
        return $this->belongsTo('App\profil', 'profil_code', 'code_profil');
    }

    public function Utilisateur()
    {
        return $this->belongsTo('App\utilisateur', 'utilisateur_code', 'code_utilisateur');
    }
}
