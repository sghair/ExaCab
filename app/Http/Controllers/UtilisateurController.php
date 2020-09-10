<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
use DB;
class UtilisateurController extends Controller
{
	public function utilisateur(Utilisateur $utilisateur){
		return view('utilisateur', compact('utilisateur'));
	}
	 public function show(){
		 $utilisateur= DB :: table('utilisateurs')->get();
		 return view('utilisateur', compact('utilisateur'));
	 }
   
	 public function store(Request $request){
		 $utilisateur= new Utilisateur;
		// $utilisateur->email = $request->email;
		 $utilisateur->Nom_user = $request->Nom_user;
		// $utilisateur->Prenom_user =$request->Prenom_user;
		 //$utilisateur->Tel = $request->Tel;
		 //$utilisateur->Role = $request->Role;
		
		 $utilisateur->save();
		 return back();
	 }
    public function getForm()
	{
		return view('utilisateur');
	}

	public function postForm(UtilisateurRequest $request)
	{
		$utilisateur = new Utilisateur;
		$utilisateur->utilisateur = $request->input('utilisateur');
		$utilisateur->save();
		
		return view('utilisateur_ok');
	}

}
