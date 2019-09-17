<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{

    public function Morceaus()
    {
        return $this->hasMany('App\morceau','genre_code', 'code_genre');
    }
}
