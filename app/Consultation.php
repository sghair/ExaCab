<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{ 
    public function Patient(){
    return $this->hasOne(patients::class);
}
    public function ordonances(){
    return $this->hasMany(Ordonance::class);
}
public function DemandeAdmissionAPCIs(){
    return $this->hasMany(DemandeAdmissionAPCIs::class);
}
public function Certificats(){
    return $this->hasOne(Certificats::class);
}
public function Dossier_medical(){
    return $this->hasOne(DossierMedicals::class);
}
public function Demande_analyse_bio(){
    return $this->hasOne(DemandeAnalyseBios::class);
}
public function Demande_radio(){
    return $this->hasOne(DemandeRadios::class);
}
public function Ordonance(){
    return $this->hasOne(Ordonance::class);
}
}
