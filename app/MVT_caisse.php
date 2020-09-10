<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MVT_caisse extends Model
{
    public function Cabinet(){
        return $this->belongsTo(Cabinets::class);
    }
}
