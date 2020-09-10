<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande_analyse_bio extends Model
{
    public function consultations(){
        return $this->belongsTo(Consultation::class);
    }
    public function Ligne_demande_analyse(){
        return $this->hasMany(LigneDemandeAnalyses::class);
    }
}
