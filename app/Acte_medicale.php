<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acte_medicale extends Model
{
    public function Consultations(){
        return $this->belongsTo(Consultations::class);
    }
  
}
