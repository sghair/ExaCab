<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescrit_actes_medicament extends Model
{
    public function Demande_prise_charge(){
        return $this->belongsTo(DemandePriseCharges::class);
    }
}
