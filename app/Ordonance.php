<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonance extends Model
{
    public function consultations(){
        return $this->belongsTo(consultations::class);
    }
    public function patients(){
        return $this->belongsTo(patients::class);
    }
}
