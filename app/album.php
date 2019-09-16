<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    public function Utilisateuralbums()
    {
        return $this->hasMany('App\utilisateuralbum','album_code', 'code_album');
    }

    public function Morceaus()
    {
        return $this->hasMany('App\morceau','album_code', 'code_album');
    }
}
