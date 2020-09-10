<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande_reeducation extends Model
{
    public function CNAMs(){
        return $this->belongsTo(CNAM::class);
    }
}
