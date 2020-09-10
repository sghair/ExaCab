<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificat_arret_travail extends Model
{
    public function CNAMs(){
        return $this->belongsTo(CNAM::class);
    }
}
