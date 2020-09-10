<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    public function MVT_caisse(){
        return $this->hasMany(MVTCaisses::class);
    }
}
