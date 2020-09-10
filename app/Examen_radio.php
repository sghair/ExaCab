<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen_radio extends Model
{
    public function Ligne_demande(){
        return $this->hasMany(LigneDemandes::class);
    }
}
