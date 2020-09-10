<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande_appareillage_medical extends Model
{
    public function CNAMs(){
        return $this->belongsTo(CNAM::class);
    }
    public function Prescrit_appareillage(){
        return $this->hasMany(PrescritAppareillages::class);
    }
}
