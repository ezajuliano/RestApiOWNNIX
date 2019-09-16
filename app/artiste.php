<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artiste extends Model
{
    public function Morceaus()
    {
        return $this->hasMany('App\morceau','artiste_code', 'code_artiste');
    }
}
