<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescrit_appareillage extends Model
{
    public function Demande_appareillage_medical(){
        return $this->belongsTo(DemandeAppareillageMedicals::class);
    }
}
