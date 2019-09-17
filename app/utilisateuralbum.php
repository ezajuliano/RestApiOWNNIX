<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateuralbum extends Model
{
    public function Utilisateur()
    {
        return $this->belongsTo('App\utilisateur', 'utilisateur_code', 'code_utilisateur');
    }
    public function Album()
    {
        return $this->belongsTo('App\album', 'album_code', 'code_album');
    }
}
