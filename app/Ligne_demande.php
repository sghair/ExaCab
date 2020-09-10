<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligne_demande extends Model
{
    public function Demande_analyse(){
        return $this->belongsTo(DemandeAnalyseBios::class);
    }
    public function Examen_analyse(){
        return $this->belongsTo(ExamenAnalyseBios::class);
    }
}
