<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletin_remboursement extends Model
{
    public function CNAMs(){
        return $this->hasMany(CNAM::class);
    }
}
