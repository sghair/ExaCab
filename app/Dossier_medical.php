<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier_medical extends Model
{
    public function CNAMs(){
        return $this->hasOne(CNAM::class);
    }
    public function Consultations(){
        return $this->hasMany(Consultations::class);
    }
    public function Certificat_arret_travail(){
        return $this->hasMany(CertificatArretTravails::class);
    }
  
}
