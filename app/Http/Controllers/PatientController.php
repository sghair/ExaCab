<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Patient;
use App\Consultation;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
//////index//////////
  public function index()
 {
      $patient = Patient::all();
 
      return view('index', compact('patient'));
 } 
 /////////////create///////////////
  public function create()
{
   return view('create');
}
/////////////////////store/////////////////
public function store(Request $request)
{
  
  $patient = new Patient;

   $patient->Id_dossier= $request->Id_dossier;
   $patient->CIN_pat= $request->CIN_pat;
   $patient->Nom_pat= $request->Nom_pat;
   $patient->Prenom_pat= $request->Prenom_pat;
   $patient->Date_naiss_pat= $request->Date_naiss_pat;
   $patient->Sex= $request->Sexe;
   $patient->Profession= $request->Profession;
   $patient->Adresse_pat= $request->Adresse_pat;
   $patient->Tel= $request->Tel;
   $patient->Antecedents= $request->Antecedents;
   $patient->Groupe_sanguine= $request->Groupe_sanguine; 
   $patient->Code_APCI= $request->Code_APCI;
   $patient->save();
       /* $validatedData = $request->validate([

          
            'Id_dossier' => 'required',
            'CIN_pat' => 'required',
            'Nom_pat' => 'string|min:3',
            'Prenom_pat' => 'string|max:15',
            'Date_naiss_pat' => 'string',
            'Sexe' => 'string',
            'Profession' => 'string',
            'Adresse_pat' => 'string',
            'Tel' => 'integer',
            'Antecedents' => 'string',
            'Groupe_sanguine' => 'string',
            'Code_APCI' => 'required',

        ]);
        $patient = Patient::create($validatedData);*/
   
        return redirect()->route('index');
 }
  ////////////show///////////////////////

  public function show(){
    $patient= DB :: table('Patients')->get();
    return view('show', compact('patient'));
}

//////////////////edit///////////////////
public function edit($id)
{
     $patient = Patient::where('Id_pat', $id)->first();
    // $patient = DB::table('patients')->where('Id_pat',$id);
     

     return view('edit',compact('patient'));
    
}

/////////////////////update/////////////////////////

public function update( Request $request, Patient $patient){
 /*$validatedData = $request->validate([
    'Id_pat' => 'required',
    'Id_dossier' => 'required',
    'CIN_pat' => 'required',
    'Nom_pat' => 'string|min:3',
    'Prenom_pat' => 'string|max:15',
    'Date_naiss_pat' => 'string',
    'Sexe' => 'string',
    'Profession' => 'string',
    'Adresse_pat' => 'string',
    'Tel' => 'integer',
    'Antecedents' => 'string',
    'Groupe_sanguine' => 'string',
    'Code_APCI' => 'required',
        ]);
*/


    //$patient=Patient::where('Id_pat',$patient)->get();
   $patient= Patient::find($patient)->first();
   //$patient->Id_pat=  $request->get('Id_pat');
  

   $patient->Id_dossier = $request->get('Id_dossier');
   $patient->CIN_pat= $request->get('CIN_pat');
   $patient->Nom_pat = $request->get('Nom_pat');
   $patient->Prenom_pat = $request->get('Prenom_pat');
   $patient->Date_naiss_pat = $request->get('Date_naiss_pat');
   $patient->Sex=  $request->get('Sexe');
   $patient->Profession = $request->get('Profession');
   $patient->Adresse_pat= $request->get('Adresse_pat');
   $patient->Tel = $request->get('Tel');
   $patient->Antecedents = $request->get('Antecedents');
   $patient->Groupe_sanguine = $request->get('Groupe_sanguine');
   $patient->Code_APCI = $request->get('Code_APCI');
   $patient->save();
   return redirect('/Patient')->with('success', 'patient is successfully updated');
   //dd($patient);
  /*->update([
    'Id_pat' => $request->input('Id_pat'),

   'Id_dossier' => $request->input('Id_dossier'),
   'CIN_pat' => $request->input('CIN_pat'),
   'Nom_pat' => $request->input('Nom_pat'),
   'Prenom_pat' => $request->input('Prenom_pat'),
   'Date_naiss_pat' =>$request->input('Date_naiss_pat'),
   'Sex' =>$request->input('Sex'),
   'Profession' => $request->input('Profession'),
   'Adresse_pat' => $request->input('Adresse_pat'),
   'Tel' => $request->input('Tel'),
   'Antecedents' =>$request->input('Antecedents'),
   'Groupe_sanguine' =>$request->input('Groupe_sanguine'),
   'Code_APCI' =>$request->input('Code_APCI')]);

   
  
dump($pat);
  }
*/}

////////////destroy///////////////
public function destroy($id)
{
 $patient=Patient::find($id);   

 //$patient = Patient::where('Id_pat',$patient);
         $patient->delete();
 
        
         return redirect()->route('Patient.index')
         ->with('success','Patient deleted successfully');
 
 
 


}  
 
 
}
