<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande_admission_APCI extends Model
{
    public function consultations(){
        return $this->hasOne(Consultation::class);
    }
    public function CNAMs(){
        return $this->belongsTo(CNAMs::class);
    }
}
