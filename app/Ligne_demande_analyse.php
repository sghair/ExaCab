<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligne_demande_analyse extends Model
{
    public function Demande_analyse_bio(){
        return $this->belongsTo(DemandeAnalyseBios::class);
    }
    public function Examen_analyse_bio(){
        return $this->belongsTo(ExamenAnalyseBios::class);
    }
}
