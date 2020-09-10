<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificat extends Model
{
    public function consultations(){
        return $this->belongsTo(Consultation::class);
    }
}
