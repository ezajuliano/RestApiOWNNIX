<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class droit extends Model
{
    public function Profildroits()
    {
        return $this->hasMany('App\profildroit','droit_code', 'code_droit');
    }
}
