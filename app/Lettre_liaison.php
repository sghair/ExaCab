<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lettre_liaison extends Model
{
    
public function consultations(){
    return $this->belongsTo(Consultation::class);
}
}