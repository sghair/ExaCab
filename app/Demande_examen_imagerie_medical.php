<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande_examen_imagerie_medical extends Model
{
    public function CNAMs(){
        return $this->belongsTo(CNAM::class);
    }
    public function Prescrit_examen(){
        return $this->hasMany(PrescritExamens::class);
    }
}
