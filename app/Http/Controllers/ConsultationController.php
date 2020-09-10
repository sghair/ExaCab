<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Consultation;
class ConsultationController extends Controller
{
    public function consultationstore(Request $request ,Patient $patient){
        $consultation=new consultation;
        $consultation->text=$request->text;
        $patient->consultations()->save($consultation);
        return back();
        
    }
}
