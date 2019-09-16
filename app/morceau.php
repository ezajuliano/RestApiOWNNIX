<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class morceau extends Model
{

    public function Utilisateurmorceaus()
    {
        return $this->hasMany('App\utilisateurmorceau','morceau_code', 'code_morceau');
    }

    public function Genre()
    {
        return $this->belongsTo('App\genre', 'genre_code', 'code_genre');
    }

    public function Album()
    {
        return $this->belongsTo('App\album', 'album_code', 'code_album');
    }

    public function Artiste()
    {
        return $this->belongsTo('App\artiste', 'artiste_code', 'code_artiste');
    }
}
