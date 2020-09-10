<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accident_travail extends Model
{
    public function CNAMs(){
        return $this->belongsTo(CNAM::class);
    }
}
