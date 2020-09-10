<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande_prise_charge extends Model
{
    public function CNAMs(){
        return $this->belongsTo(CNAM::class);
    }
    public function Prescrit_actes_medicament(){
        return $this->hasMany(PrescritActesMedicaments::class);
    }
}
