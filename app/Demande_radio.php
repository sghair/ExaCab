<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande_radio extends Model
{
    public function consultations(){
        return $this->belongsTo(Consultation::class);
    }
    
    public function Ligne_demande(){
        return $this->hasMany(LigneDemandes::class);
    }
}
