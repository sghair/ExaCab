<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescrit_examen extends Model
{
    public function Demande_examen_imagerie_medical(){
        return $this->belongsTo(DemandeExamenImagerieMedicals::class);
    }
}
