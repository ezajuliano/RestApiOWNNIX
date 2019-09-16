<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profildroit extends Model

{
    protected $fillable = ['droit_code','profil_code'];

    public function Profil()
    {
        return $this->belongsTo('App\profil', 'profil_code', 'code_profil');
    }

    public function Droit()
    {
        return $this->belongsTo('App\droit', 'droit_code', 'code_droit');
    }

}
