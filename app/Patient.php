<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['Id_dossier','CIN_pat',
    'Nom_pat','Prenom_pat','Date_naiss_pat','Sexe','Profession','Adresse_pat',
   'Tel','Antecedents','Groupe_sanguine','Code_APCI'];

   protected $primaryKey = 'Id_pat';

   
   public function isAdmin() {
  
    return (bool) $this->id === 1;
  }
   public function appointment() {
    return $this->hasMany('App\Appointment');
  }
  
   
    public function consultations(){
        return $this->belongsTo('App/Consultations','Id_consult');
    }
    
    public function CNAMs(){
        return $this->hasone(CNAM::class);
    }
    public function Ordonance(){
        return $this->hasMany(Ordonance::class);
    }
}
