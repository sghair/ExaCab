<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CNAM extends Model
{
    public function Patient(){
        return $this->hasMany(patients::class);
    }
    public function Accident_travail(){
        return $this->hasMany(AccidentTravails::class);
    }
    public function Dossier_medical(){
        return $this->belongsTo(DossierMedicals::class);
    }
    public function Bulletin_remboursement(){
        return $this->hasMany(Bulletin_remboursement::class);
    }
    public function Demande_admission_APCI(){
        return $this->hasMany(DemandeAdmissionAPCIs::class);
    }
    public function Demande_appareillage_medical(){
        return $this->hasMany(DemandeAppareillageMedicals::class);
    }
    public function Demande_examen_imagerie_medical(){
        return $this->hasMany(DemandeExamenImagerieMedicals::class);
    }
    public function Demande_prise_charge(){
        return $this->hasMany(DemandePriseCharges::class);
    }
    public function Demande_reeducation(){
        return $this->hasMany(DemandeReeducations::class);
    }
    public function Lettre_liaison(){
        return $this->hasMany(LettreLiaisons::class);
    }
    
    
}
