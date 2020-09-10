<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen_analyse_bio extends Model
{
    public function Ligne_demande_analyse(){
        return $this->hasMany(LigneDemandeAnalyses::class);
    }
}
